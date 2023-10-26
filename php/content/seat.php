<!-- <?php
        session_start();

        require_once('./db/dbhelper.php');
        require_once('./utils/utility.php');

        ?> -->

<link rel="stylesheet" href="./css/ticket-details.css">

<style>
.next-button:hover {
    opacity: 0.7 !important;
}
</style>

<!-- start banner Area -->
<section class="banner-area relative hi">
    <div class="banner__area-header">
        MUA VÉ
    </div>
</section>
<!-- End banner Area -->

<!-- Start content -->

<div class="content" data-v-8ae73c64="">
    <h1 data-v-8ae73c64="">{{TenTuyen}}</h1>
    <div data-v-8ae73c64="">12/12/2022</div>
</div>

<div class="route-option selected" data-v-008a65cb=''>
    <div class="header" data-v-008a65cb="">
        00:00
        <img alt="fromto" width="28" height="7"
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAAOCAYAAAB6pd+uAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAOKADAAQAAAABAAAADgAAAAAjNiV1AAABjklEQVRIDWNgGGQgraTRO7OiXZBazmKilkHUMuffPwaFX39+ZaSXN+lTw8xB50FGRgYmxn8MbH9//w9ILmoMLezr46TEo4POg/8ZgV6EAiBD68uTL5nAJKsEEyOVZiZVA63VG1nYWzIwMHIg2cP+7+9ffWMrRw4/d4eHBw4c+IckR5A56GIQGGtY3fT/P4PFk0+MqSlVreIEfYWkAKthSPJ0ZyInUSyWizH+/JuaVNJk+f//f3hSxqIOLjToPMgALGTgrsPCAHqMmenff7fUsubY3IYGPixKUITwGoaikk4cYAlKnJv+/lf88YUxM7W8SRuf04gzDJ8JVJYjkERRbPv/j4Hj/+//IamFjYG5kyaxo0hCOYwpRY312CSGntj/j0ysHOtmdVY8Qnb7oItBZMeRxmbk//f7ZyKwceAcumoVvPobRh6EBAewaLXhP3kjOa24QQQkwmxk6egAkRqcJDBP/mcAImDpCkQgBgMom/4DYmBFAaorgMUSAwMEMzL+BSr5BxTkBNabeqZ2Tp8BQTlvqFxYe+QAAAAASUVORK5CYII="
            data-v-008a65cb="">
        08:00
    </div>
    <div class="label" data-v-008a65cb="">
        <span class="giaVe">123</span> <span class="dot" data-v-008a65cb=""></span>
        Limousine <span class="dot" data-v-008a65cb=""></span>
        <span data-v-008a65cb="">Còn 36 chỗ</span>
        <span class="dot" data-v-008a65cb=""></span> Nhà xe Toàn Thắng</span>
    </div>
    <div class="route-line-container" data-v-008a65cb="">
        <div class="route-line-list" data-v-008a65cb="">
            <div class="Service">
                <span style="font-size: 1.7rem; font-weight: 500">Các loại dịch vụ:</span><br>
                <span class="dichvu">Có wifi </span> <br>
                <span class="dichvu"> Có ổ cắm </span> <br>
            </div>
        </div>
    </div>

    <div data-v-14de86f4="" data-v-008a65cb="" class="time-line-container">
        <div data-v-14de86f4="" class="title-container">
            <p data-v-14de86f4="" class="title">LỊCH TRÌNH CHUYẾN ĐI</p>
        </div>
    </div>

    <div data-v-5c79fc2e='' data-v-008a65cb='' class='seat-map-container margin'>
        <div data-v-5c79fc2e='' id='booking-seat-map' class='set-map-wrap'>
            <div data-v-5c79fc2e="" class="tab">
                <div data-v-5c79fc2e="" class="active js-floor-a" style="cursor: pointer;">
                    <img data-v-5c79fc2e="" width="14" height="14" alt="down_floor_active"
                        src="https://png.pngtree.com/png-vector/20190930/ourlarge/pngtree-downstairs-line-icon-vector-png-image_1772339.jpg" />
                    Tầng dưới
                </div>
                <div data-v-5c79fc2e="" class="js-floor-b" style="cursor: pointer;">
                    <img data-v-5c79fc2e="" width="14" height="14" alt="up_floor"
                        src="https://png.pngtree.com/png-vector/20190930/ourlarge/pngtree-stair-up-glyph-icon-vector-png-image_1772306.jpg" />
                    Tầng trên
                </div>
            </div>
            <div data-v-5c79fc2e="" class="floor-title">
                <div data-v-5c79fc2e="">
                    <img data-v-5c79fc2e="" width="14" height="14" alt="down_floor_active"
                        src="https://png.pngtree.com/png-vector/20190930/ourlarge/pngtree-downstairs-line-icon-vector-png-image_1772339.jpg" />
                    Tầng dưới
                </div>
                <div data-v-5c79fc2e="">
                    <img data-v-5c79fc2e="" width="14" height="14" alt="up_floor"
                        src="https://png.pngtree.com/png-vector/20190930/ourlarge/pngtree-stair-up-glyph-icon-vector-png-image_1772306.jpg" />
                    Tầng trên
                </div>
            </div>
            <div data-v-5c79fc2e="" class="seat-tables">
                <div data-v-7a185f94="" data-v-5c79fc2e="" class="alert alert-info noinfo" style="display: none;">
                    <p data-v-7a185f94="" style="text-align: center;">Chưa có thông tin</p>
                </div>
                <div data-v-be38f442="" data-v-5c79fc2e="" class="seat-table-container" id="seat_table_a">
                    <!---->
                    <table data-v-be38f442="" class="table seat-table" id="seat_table">
                        <tbody data-v-be38f442="">
                            <tr data-v-be38f442="" class="">
                                <td data-v-be38f442="" class="class-seat">
                                    <svg data-v-7d216ab5="" data-v-be38f442="" xmlns="http://www.w3.org/2000/svg"
                                        width="42" height="42" viewBox="0 0 42 42" class="seat isSmall" pos="0">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A1</tspan>
                                        </text>
                                    </svg>
                                </td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="1">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="2">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A2</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="3">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="4">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A3</tspan>
                                        </text>
                                    </svg></td>
                            </tr>
                            <tr data-v-be38f442="" class="">
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="5">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A4</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="6">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="7">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A5</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="8">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="9">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A6</tspan>
                                        </text>
                                    </svg></td>
                            </tr>
                            <tr data-v-be38f442="" class="">
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="10">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A7</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="11">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="12">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A8</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="13">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="14">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A9</tspan>
                                        </text>
                                    </svg></td>
                            </tr>
                            <tr data-v-be38f442="" class="">
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="15">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A10</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="16">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="17">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A11</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="18">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="19">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A12</tspan>
                                        </text>
                                    </svg></td>
                            </tr>
                            <tr data-v-be38f442="" class="">
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="20">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A13</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="21">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="22">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A14</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="23">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="24">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A15</tspan>
                                        </text>
                                    </svg></td>
                            </tr>
                            <tr data-v-be38f442="" class="">
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="25">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A16</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="26">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="27">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A17</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="28">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="29">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A18</tspan>
                                        </text>
                                    </svg></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div data-v-be38f442="" data-v-5c79fc2e="" class="seat-table-container hide-mobile" id="seat_table_b">
                    <!---->
                    <table data-v-be38f442="" class="table seat-table">
                        <tbody data-v-be38f442="">
                            <tr data-v-be38f442="" class="">
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="0">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A19</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="1">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="2">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A20</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="3">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="4">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A21</tspan>
                                        </text>
                                    </svg></td>
                            </tr>
                            <tr data-v-be38f442="" class="">
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="5">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A22</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="6">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="7">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A23</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="8">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="9">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A24</tspan>
                                        </text>
                                    </svg></td>
                            </tr>
                            <tr data-v-be38f442="" class="">
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="10">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A25</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="11">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="12">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A26</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="13">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="14">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A27</tspan>
                                        </text>
                                    </svg></td>
                            </tr>
                            <tr data-v-be38f442="" class="">
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="15">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A28</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="16">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="17">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A29</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="18">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="19">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A30</tspan>
                                        </text>
                                    </svg></td>
                            </tr>
                            <tr data-v-be38f442="" class="">
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="20">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A31</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="21">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">
                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="22">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A32</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background" pos="22">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text"></tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="23">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A33</tspan>
                                        </text>
                                    </svg></td>
                            </tr>
                            <tr data-v-be38f442="" class="">
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="25">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A34</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="26">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="27">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A35</tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat hidden animated-background isSmall" pos="28">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="disabled-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">

                                            </tspan>
                                        </text>
                                    </svg></td>
                                <td data-v-be38f442="" class="class-seat"><svg data-v-7d216ab5="" data-v-be38f442=""
                                        xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42"
                                        class="seat isSmall" pos="29">
                                        <g data-v-7d216ab5="" fill="none" fill-rule="evenodd">
                                            <g data-v-7d216ab5="" class="active js-seat">
                                                <path data-v-7d216ab5=""
                                                    d="M8.625.5c-3.038 0-5.5 2.462-5.5 5.5v27.875c0 .828.672 1.5 1.5 1.5h32.75c.828 0 1.5-.672 1.5-1.5V6c0-3.038-2.462-5.5-5.5-5.5H8.625zM5.75 35.5V38c0 1.933 1.567 3.5 3.5 3.5h23.5c1.933 0 3.5-1.567 3.5-3.5v-2.5H5.75z">
                                                </path>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x=".5" y="13.625"
                                                    rx="2.563"></rect>
                                                <rect data-v-7d216ab5="" width="5.125" height="16.5" x="36.375"
                                                    y="13.625" rx="2.563"></rect>
                                            </g>
                                        </g> <text data-v-7d216ab5="">
                                            <tspan data-v-7d216ab5="" x="50%" y="50%" dominant-baseline="middle"
                                                text-anchor="middle" class="active-seat-text">A36</tspan>
                                        </text>
                                    </svg></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div data-v-5c79fc2e="" class="seat-statuses">
                <div data-v-5c79fc2e="" class="status-item">
                    <div data-v-5c79fc2e="" class="active"></div>
                    <div data-v-5c79fc2e="" class="status-text">Trống</div>
                </div>
                <div data-v-5c79fc2e="" class="status-item">
                    <div data-v-5c79fc2e="" class="select"></div>
                    <div data-v-5c79fc2e="" class="status-text">Đang chọn</div>
                </div>
                <div data-v-5c79fc2e="" class="status-item">
                    <div data-v-5c79fc2e="" class="disable"></div>
                    <div data-v-5c79fc2e="" class="status-text">Đã đặt</div>
                </div>
            </div>


        </div>
        <div data-v-5c79fc2e="" class="footer">
            <div data-v-5c79fc2e="" class="ticket">
                <span id="total-seat">0 Vé</span>
                <span data-v-5c79fc2e="">
                    <!---->
                    <span id="name-seat"></span>
                    <div data-v-5c79fc2e="">
                        Tổng tiền:
                        <span data-v-5c79fc2e="" class="total">
                            0 ₫
                            <sup data-v-5c79fc2e=""></sup></span>
                    </div>
                </span>
            </div>
            <section class="other-issue-area ">
                <div class="container">
                    <div class="row">
                        <div class="left-btns" data-v-5c79fc2e="">
                            <button class="back-btn" data-v-5c79fc2e=""
                                style="font-size: 1.6rem; transition:all 0.5s; cursor: pointer;">
                                <img data-v-5c79fc2e=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAASKADAAQAAAABAAAASAAAAACQMUbvAAACSklEQVR4Ae3aT07CQBQGcKrAyh22cAiDngGix/BwHMOoW9eohygV1iRAqO/FEppaoJH58435utDpFN7M/CxD5zmtFg8KUIACFKAABShAAQpQgAIUoAAFKPCvBKKQRjMYDOLVavWofe52u5M0Tb9s9z8YoCRJbjebzVOe54miRFGUCtLQNtKl7b+AifiKs16vXyRWXIp3td1uZ8vl8q1UZ7x4YTyi4YAlnJ7h0I3CQQMdw5GPWKbzUKNRnvEiWKBjODLeebvdvrc9/6gr5CR9CqfT6YyzLHs/48Zo/FY4ICQcuDsIDQcKCBEHBggVBwIIGcc7EDqOV6AQcLwBhYKjQM4Xq3Ec38mqXBeedWurucuHQAU4dTh9UCxwnqVTQeAonjOgEHGcAYWK4wSo3+8nkib9lMbKyS5tWw+4OeenW/uf7X3RTkkygZpDrsWR+pGsyj/stGwmqot8UH6gq5F8Y7lo/0Dzzaqtd1CzfpL9m9V0p6d5Zn0mqrkGU2UdSLN+kv17kBHPa0YNj+Tsa17ulGHxn4nrGqhF8YA4rbnmtcoZkI4yRCSnQCEiOQcKDckLUEhI3oBCQfIKFAKSdyB0JAggZCQYIFQkKCBEJDggNCRIoBLSq5Tr8tfO1m6wQKeQig1UN7b3CFlPd+hA/3roHiBZ5Y/k/YtqDN3MudvxWr1m8hwaSAdaII2l+AvJJMShWPBA2nFBmmq+SD9Wu4FIWbcBT3bntn5Dz0HVQfvYSF7tA88pQAEKUIACFKAABShAAQpQgAIUoEDgAt/KjWWzclDJlgAAAABJRU5ErkJggg=="
                                    alt="back" width="24" height="24" class="icon">
                                <a style="font-size: 1.6rem; color: #000;" href="./index.php?page=tickets">Quay lại</a>
                            </button>
                            <!---->
                        </div>
                        <div data-v-5c79fc2e="" class="right-btns">
                            <button data-v-5c79fc2e="" class="next-button" onclick="getArraySeat()"
                                style="font-size: 1.6rem; transition:all 0.5s">
                                <a>Tiếp tục</a>
                                <img data-v-5c79fc2e=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAASKADAAQAAAABAAAASAAAAACQMUbvAAABnklEQVR4Ae3a4W3CMBCGYdIVUBkDmKGDdIkyUffoEizRUtoZ0u8QkSrrcjE0DTh+LUWQu2AnTy4/cLxY0BBAAAEEEEAAAQQQQAABBBBAAIFZCTRTXE3bto8a5/k81mvTNMcpxi1iDMPR9q6tawd92RRx8lOcpDBeOplfn1+lID1MgeSMsVTsrRQk5/zHCwnBHjF7rLxWTCWNJ+L0JJm1NsPwGkhmJhlDOnpCioEEkvNoeSEqyVNJYiAlIN4uSJ5KEgMpAfF2QfJUkhhICYi3C5KnksQykLbJT+rbBSnjnoMEUoZAxiEDlfSp/Cqjm3kfMoC0+++rv9WM4iXXZS8W+l4utJd0NLtjVT0bbX0TbR/K2duSOtsAjk28reuU0VWDE9x6cMAJBIIUlQNOIBCkqBxwAoEgReWAEwgEKSoHnEAgSFE51+PYv/Wq/3gOLaCqF8eKStXhrVFU+DTPc/c4t5pR/Jbdk5YD74Mns46UKsVbBnz3ldPdnb653i4/yqchqSMWko+iSScIIIAAAggggAACCCCAAAIIIIDAnwR+AARz1rJJfntoAAAAAElFTkSuQmCC"
                                    alt="back" width="24" height="24" class="icon">
                            </button>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="Chitiet">
    <div class="_3YmilF page-product__shop">
        <div class="MxDabu">
            <a class="CrEFt7"
                href="/sharp_official_store?categoryId=100010&amp;entryPoint=ShopByPDP&amp;itemId=5860820787">
                <div class="shopee-avatar _92jwbD">
                    <img class="shopee-avatar__img"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5TW0-I-qR1-nBJzHWRIMakFFz25j5cs6dmsqJUf4QkzDJ7wwcsmuzvO4Jqgpi_G3Pcu8&usqp=CAU">
                </div>

        </div>
        </a>
        <div class="auohmy">
            <div class="FbKovn">Nhà xe Toàn Thắng</div>
        </div>
    </div>
</div>

<div class="s1qcwz">
    <div class="uj8RAg">
        <div class="ZM0I40 TgiIDB">
            <label class="_7wqb+H">Đánh giá: <b>200</b> </label>
        </div>
        <!-- <a class="FN6HJb TgiIDB" href="/sharp_official_store#product_list"> -->
        <label class="_7wqb+H">Tổng số lượng xe:<b style="color: #f8b600;"> 50 </b></label>
        <!-- </a> -->
    </div>
    <div class="uj8RAg">
        <div class="ZM0I40 TgiIDB">
            <label class="_7wqb+H">Tỉ lệ phản hồi <b style="color: #f8b600;">100%</b> </label>
        </div>
        <div class="ZM0I40 TgiIDB">
            <label class="_7wqb+H">Thời gian phản hồi <b style="color: #f8b600;">trong vài giờ</b> </label>
        </div>
    </div>
    <div class="uj8RAg">
        <div class="ZM0I40 TgiIDB">
            <label class="_7wqb+H">Email: <b style="color: #f8b600;">100%</b> </label>
        </div>
        <div class="ZM0I40 TgiIDB">
            <label class="_7wqb+H">Số điện thoại: <b style="color: #f8b600;">trong vài giờ</b> </label>
        </div>
    </div>
</div>



<section class="comment">
    <div class="product-ratings__header">PHẢN HỒI KHÁCH HÀNG</div>

    <div class="product-ratings__list">
        <div class="shopee-product-comment-list">

            <div class="product-rating-overview">
                <form class="form-submit" style="background-color: #fffbf8;" action="#" method="post">
                    <div style="    display: grid">
                        <img class="rounded-circle shadow-1-strong me-3"
                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" width="30"
                            alt="Profile Brad Jonas" title="Brad Jonas" />
                        <textarea style="margin-top: 1rem; resize:none;" placeholder="Please add your comment here"
                            name="comments"></textarea>
                    </div>
                    <div class="form-submit-button" style="width: 5rem; margin: 1rem auto;">
                        <input name="submit" type="submit" id="submit"
                            style="margin-top: 10px; background: #f8b600; font-size: 1.5rem; padding: 1rem; border: none; border-radius: 0.2rem;"
                            class="submit" value="Đăng">
                    </div>
                </form>
            </div>

        </div>
    </div>

</section>

<!-- End content -->

<script>
$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "getInfoTrip",
    },
    success: function(data) {
        console.log(data)
        content = `<h1 data-v-8ae73c64="">${data.TenTuyen}</h1>
                <div data-v-8ae73c64="" style="font-weight:600; font-size: 1.7rem">${data.NgayDi}</div>`
        $(".content").html(content);

        header = `
        ${data.giodi}
        <img alt="fromto" width="28" height="7"
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAAOCAYAAAB6pd+uAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAOKADAAQAAAABAAAADgAAAAAjNiV1AAABjklEQVRIDWNgGGQgraTRO7OiXZBazmKilkHUMuffPwaFX39+ZaSXN+lTw8xB50FGRgYmxn8MbH9//w9ILmoMLezr46TEo4POg/8ZgV6EAiBD68uTL5nAJKsEEyOVZiZVA63VG1nYWzIwMHIg2cP+7+9ffWMrRw4/d4eHBw4c+IckR5A56GIQGGtY3fT/P4PFk0+MqSlVreIEfYWkAKthSPJ0ZyInUSyWizH+/JuaVNJk+f//f3hSxqIOLjToPMgALGTgrsPCAHqMmenff7fUsubY3IYGPixKUITwGoaikk4cYAlKnJv+/lf88YUxM7W8SRuf04gzDJ8JVJYjkERRbPv/j4Hj/+//IamFjYG5kyaxo0hCOYwpRY312CSGntj/j0ysHOtmdVY8Qnb7oItBZMeRxmbk//f7ZyKwceAcumoVvPobRh6EBAewaLXhP3kjOa24QQQkwmxk6egAkRqcJDBP/mcAImDpCkQgBgMom/4DYmBFAaorgMUSAwMEMzL+BSr5BxTkBNabeqZ2Tp8BQTlvqFxYe+QAAAAASUVORK5CYII="
            data-v-008a65cb="">
        ${data.gioden}`
        $(".header").html(header);

        label = `
        <span class="giaVe">${data.GiaVe}</span>đ <span class="dot" data-v-008a65cb=""></span>
        ${data.Loai_Xe} <span class="dot" data-v-008a65cb=""></span>
        <span data-v-008a65cb="">Còn ${data.ChoConLai} chỗ</span>
        <span class="dot" data-v-008a65cb=""></span> Nhà xe ${data.Ten_NX}</span>`
        $(".label").html(label);

        data.GiaVe = Number(data.GiaVe.replace(',', ''))

        Service = `<span style="font-size: 1.7rem; font-weight: 500">Các loại dịch vụ:</span><br>`
        const dichVu = data.DichVu.split(", ")
        for (var service of dichVu) {
            Service += `<span class="dichvu" style="font-weight: 400">${service}</span> <br>`
        }
        $(".Service").html(Service);
    },
})

$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "checkTrip",
    },
    success: function(listdata) {
        var listSeat = []

        for (data of listdata) {
            listSeat.push(data.TenChoNgoi)
        }

        disableSeat(listSeat)
    },
})

function disableSeat(listSeat) {
    const parentSeats = document.querySelectorAll('.class-seat')
    for (const parentSeat of parentSeats) {
        const seatBtn = parentSeat.querySelector('.js-seat')
        const seat_textBtn = parentSeat.querySelector('.active-seat-text')

        var nameSeat = seat_textBtn.innerHTML

        if (listSeat.includes(nameSeat)) {
            seatBtn.classList = 'disabled-seat'
            seat_textBtn.classList = 'disabled-seat-text'
        }
    }
}

$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "getComment",
    },
    success: function(listComment) {
        html = `<div class="product-rating-overview">
                <form class="form-submit" style="background-color: #fffbf8;" action="#" method="post">
                    <div style="    display: grid">
                        <img class="rounded-circle shadow-1-strong me-3"
                            src="https://cf.shopee.vn/file/12fa6a7a212c4900dd60d30429ce66cf_tn" width="30"
                            alt="Profile Brad Jonas" title="Brad Jonas" />
                        <textarea style="margin-top: 1rem; resize:none;" placeholder="Please add your comment here"
                            name="comments"></textarea>
                    </div>
                    <div class="form-submit-button" style="width: 5rem; margin: 1rem auto;">
                        <input name="submit" type="submit" id="submit" style="margin-top: 10px; background: #f8b600; font-size: 1.5rem; padding: 1rem; border: none; border-radius: 0.2rem;" class="submit" value="Đăng">
                    </div>
                </form>
            </div>`

        for (var comment of listComment) {

            html += `<div class="shopee-product-rating">
                        <div class="shopee-product-rating__avatar">
                            <div class="shopee-avatar">
                                <img class="shopee-avatar__img"
                                    src="https://cf.shopee.vn/file/12fa6a7a212c4900dd60d30429ce66cf_tn">
                            </div>
                        </div>
                        <div class="shopee-product-rating__main">
                            <div class="shopee-product-rating__author-name">${comment.HoTen}</div>
                            <div class="repeat-purchase-con">
                            </div>
                            <p class="EXI9SU">${comment.BinhLuan}</p>
                        </div>
                    </div>`

        }

        $(".shopee-product-comment-list").html(html);
    },
})

function getArraySeat() {
    const arrSeat = []

    const seatSelectingBtns = document.querySelectorAll('.selecting-seat-text')

    for (const seatSelectingBtn of seatSelectingBtns) {
        arrSeat.push(seatSelectingBtn.innerHTML)
    }
    $.ajax({
        url: "./php/getData.php",
        type: "post",
        dataType: "json",
        data: {
            request: "postArraySeat",
            arrSeat: arrSeat
        },
        success: function(listdata) {
            window.location = './index.php?page=dieukhoan'
        },
    })
    event.preventDefault();

}

var seat;
let element_total_seat = document.getElementById("total-seat");
let element_name_seat = document.getElementById("name-seat");
let total_seat = 0;
let name_seat = '';
let seat_value;
let seat_map = document.getElementById("seat_table");
let seat_map_b = document.getElementById("seat_table_b");
let sumSeat = 0

seat_map.addEventListener('click', (e) => {
    seat = e.target.closest('.class-seat');
    let seat_active = seat.querySelector(".active");
    let seat_value_text = seat.querySelector(".active-seat-text")
    let seat_value_tmp = seat.querySelector(".active-seat-text").textContent;
    seat_value_tmp = seat_value_tmp.replace(/\s+/g, '');
    seat_value = seat_value_tmp.replace(/\n+/g, '');

    seat_active.classList.toggle("selecting");
    seat_value_text.classList.toggle("selecting-seat-text");

    if (seat_active.className.animVal.includes("selecting") == true) {
        total_seat++;
        name_seat = name_seat + ' ' + seat_value;
    } else {
        total_seat--;
        name_seat = name_seat.replace(" " + seat_value, "");
    }
    element_total_seat.innerHTML = total_seat + ' Vé :';
    element_name_seat.innerHTML = name_seat;

    $.ajax({
        url: "./php/getData.php",
        type: "post",
        dataType: "json",
        data: {
            request: "getInfoTrip",
        },
        success: function(data) {
            var giaVe = Number(data.GiaVe.replace(',', ''))
            var totalSeat = total_seat * giaVe

            totalSeat = totalSeat.toLocaleString();

            total = `
                            ${totalSeat} ₫
                            <sup data-v-5c79fc2e=""></sup></span>
                    `
            $(".total").html(total);

            postTotal(totalSeat)
        },
    })

});

seat_map_b.addEventListener('click', (e) => {
    seat = e.target.closest('.class-seat');
    let seat_active = seat.querySelector(".active");
    let seat_value_text = seat.querySelector(".active-seat-text")
    let seat_value_tmp = seat.querySelector(".active-seat-text").textContent;
    seat_value_tmp = seat_value_tmp.replace(/\s+/g, '');
    seat_value = seat_value_tmp.replace(/\n+/g, '');

    seat_active.classList.toggle("selecting");
    seat_value_text.classList.toggle("selecting-seat-text");

    if (seat_active.className.animVal.includes("selecting") == true) {
        total_seat++;
        name_seat = name_seat + ' ' + seat_value;
    } else {
        total_seat--;
        name_seat = name_seat.replace(" " + seat_value, " ");
    }
    element_total_seat.innerHTML = total_seat + '  Vé :';
    element_name_seat.innerHTML = name_seat;

    $.ajax({
        url: "./php/getData.php",
        type: "post",
        dataType: "json",
        data: {
            request: "getInfoTrip",
        },
        success: function(data) {
            var giaVe = Number(data.GiaVe.replace(',', ''))
            var totalSeat = total_seat * giaVe

            totalSeat = totalSeat.toLocaleString();

            total = `
                        ${totalSeat} ₫
                        <sup data-v-5c79fc2e=""></sup></span>
                `
            $(".total").html(total);

            postTotal(totalSeat)
        },
    })
});
</script>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
}

function postTotal(totalSeat) {
    $.ajax({
        url: "./php/getData.php",
        type: "post",
        dataType: "json",
        data: {
            request: "postTotalSeat",
            totalSeat: totalSeat
        },
        success: function(data) {
            console.log(data)
        },
    })
    event.preventDefault();

}
</script>