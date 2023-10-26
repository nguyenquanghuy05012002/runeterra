<!-- start banner Area -->
<section class="banner-area relative">
    <div class="banner__area-header">
        LỊCH SỬ
    </div>
</section>
<!-- End banner Area -->

<!-- Start content -->
<div>
    <div class="container-lichsu">
        <div class="col-lg-4 col-md-6 banner-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                    <form class="form-wrap">
                        <input type="text" class="form-control" id="findBillTicket" placeholder="VD: TK1">
                        <a class="primary-btn text-uppercase search-btn" style="color: #fff;"
                            onclick="findBill()">Tìm</a>
                    </form>
                </div>
            </div>
        </div>

        <table class="list-tickets" cellspacing="0">

            <tr>
                <th>Mã vé</th>
                <th>Tuyến đường</th>
                <th>Ngày đi</th>
                <th>Giờ</th>
                <th>Ghế</th>
                <th>Giá</th>
                <th>Trạng thái</th>
            </tr>
        </table>
    </div>
</div>
<!-- End content -->

<script>
$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "billList",
    },
    success: function(listdata) {
        html = `<tr>
                <th>Mã vé</th>
                <th>Tuyến đường</th>
                <th>Ngày đi</th>
                <th>Giờ đi</th>
                <th>Ghế</th>
                <th>Giá</th>
                <th>Trạng thái</th>
            </tr>`;
        for (var data of listdata) {
            if (data.TinhTrangVe == "Đã hoàn thành") {
                html += `<tr>
                            <td>${data.IdCTBV}</td>
                            <td>${data.TenTuyen}</td>
                            <td>${data.NgayDi}</td>
                            <td>${data.GioDi}</td>
                            <td>${data.TenChoNgoi}</td>
                            <td>${data.GiaVe}</td>
                            <td><a class="js-bill green">${data.TinhTrangVe}</a></td>
                        </tr>`;
            } else if (data.TinhTrangVe == "Chưa hoàn thành") {
                html += `<tr>
                            <td>${data.IdCTBV}</td>
                            <td>${data.TenTuyen}</td>
                            <td>${data.NgayDi}</td>
                            <td>${data.GioDi}</td>
                            <td>${data.TenChoNgoi}</td>
                            <td>${data.GiaVe}</td>
                            <td><a class="js-bill chuaHoanThanh">${data.TinhTrangVe}</a></td>
                        </tr>`;
            } else if (data.TinhTrangVe == "Chờ xác nhận") {
                html += `<tr>
                            <td>${data.IdCTBV}</td>
                            <td>${data.TenTuyen}</td>
                            <td>${data.NgayDi}</td>
                            <td>${data.GioDi}</td>
                            <td>${data.TenChoNgoi}</td>
                            <td>${data.GiaVe}</td>
                            <td><a class="js-bill red">${data.TinhTrangVe}</a></td>
                        </tr>`;
            } else {
                html += `<tr>
                            <td>${data.IdCTBV}</td>
                            <td>${data.TenTuyen}</td>
                            <td>${data.NgayDi}</td>
                            <td>${data.GioDi}</td>
                            <td>${data.TenChoNgoi}</td>
                            <td>${data.GiaVe}</td>
                            <td><a class="js-bill">${data.TinhTrangVe}</a></td>
                        </tr>`;
            }
        }
        $(".list-tickets").html(html);
    },
    complete: function() {
        const billBtns = document.querySelectorAll('.js-bill')

        for (const billBtn of billBtns) {
            billBtn.addEventListener('click', function() {
                const idTicket = this.parentElement.parentElement.firstElementChild.innerHTML

                checkBill(idTicket, modalBill)
            })
        }
    },
});

function findBill() {
    var idBill = document.querySelector('#findBillTicket').value

    $.ajax({
        url: "./php/getData.php",
        type: "post",
        dataType: "json",
        data: {
            request: "billList",
            idBill: idBill
        },
        success: function(listdata) {

            console.log(listdata)
            html = `<tr>
                <th>Mã vé</th>
                <th>Tuyến đường</th>
                <th>Ngày đi</th>
                <th>Giờ đi</th>
                <th>Ghế</th>
                <th>Giá</th>
                <th>Trạng thái</th>
            </tr>`;
            for (var data of listdata) {
                if (data.TinhTrangVe == "Đã hoàn thành") {
                    html += `<tr>
                            <td>${data.IdCTBV}</td>
                            <td>${data.TenTuyen}</td>
                            <td>${data.NgayDi}</td>
                            <td>${data.GioDi}</td>
                            <td>${data.TenChoNgoi}</td>
                            <td>${data.GiaVe}</td>
                            <td><a class="js-bill green">${data.TinhTrangVe}</a></td>
                        </tr>`;
                } else if (data.TinhTrangVe == "Chưa hoàn thành") {
                    html += `<tr>
                            <td>${data.IdCTBV}</td>
                            <td>${data.TenTuyen}</td>
                            <td>${data.NgayDi}</td>
                            <td>${data.GioDi}</td>
                            <td>${data.TenChoNgoi}</td>
                            <td>${data.GiaVe}</td>
                            <td><a class="js-bill red">${data.TinhTrangVe}</a></td>
                        </tr>`;
                } else {
                    html += `<tr>
                            <td>${data.IdCTBV}</td>
                            <td>${data.TenTuyen}</td>
                            <td>${data.NgayDi}</td>
                            <td>${data.GioDi}</td>
                            <td>${data.TenChoNgoi}</td>
                            <td>${data.GiaVe}</td>
                            <td><a class="js-bill">${data.TinhTrangVe}</a></td>
                        </tr>`;
                }
            }
            $(".list-tickets").html(html);
        },
        complete: function() {
            const billBtns = document.querySelectorAll('.js-bill')

            for (const billBtn of billBtns) {
                billBtn.addEventListener('click', function() {
                    const idTicket = this.parentElement.parentElement.firstElementChild.innerHTML

                    checkBill(idTicket, modalBill)
                })
            }
        },
    });
}
</script>