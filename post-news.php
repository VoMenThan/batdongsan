<?php include_once ('header.php');?>
        <!--box content-->
        <section class="box-content row">
        <!--main-->
            <main class="col-xl-9 col-lg-9">
                <div class="box-detail-item">
                    <h1>THÔNG TIN CHUNG</h1>
                    <form method="" action="#" id="vmt-form-post-item">
                        <div class="vmt-form-post form-group">
                            <label for="post-news-title">Tiêu đề</label>
                            <input type="text" class="form-control" id="post-news-title" placeholder="Nhập tiêu đề">
                        </div>
                        <div class="vmt-form-post form-group">
                            <label for="post-news-pecies">Loại bất động sản</label>
                            <input type="text" class="form-control" id="post-news-pecies" placeholder="Nhập loại bđs">
                        </div>

                        <div class="row">
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-long">Chiều dài</label>
                                <input type="text" class="form-control" id="post-news-long" placeholder="Nhập chiều dài">
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-width">Chiều rộng</label>
                                <input type="text" class="form-control" id="post-news-width" placeholder="Nhập chiều rộng">
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-acreage">Diện tích</label>
                                <input type="text" class="form-control" id="post-news-acreage" placeholder="Nhập diện tích">
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-juridical">Pháp lý</label>
                                <select class="form-control" id="post-news-juridical">
                                    <option>Sổ hồng</option>
                                    <option>Sổ xanh</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-price">Giá</label>
                                <input type="text" class="form-control" id="post-news-price" placeholder="Nhập giá">
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-unit">Đơn vị tính</label>
                                <select class="form-control" id="post-news-unit">
                                    <option>Triệu</option>
                                    <option>Tỷ</option>
                                </select>
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-start">Ngày bắt đầu</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="post-news-start" placeholder="Nhập ngày">
                                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-end">Ngày kết thúc</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="post-news-end" placeholder="Nhập ngày">
                                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-living-room">Số phòng khách</label>
                                <input type="text" class="form-control" id="post-news-living-room" placeholder="Nhập số phòng">
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-bedroom">Số phòng ngủ</label>
                                <input type="text" class="form-control" id="post-news-bedroom" placeholder="Nhập số phòng">
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-kitchen">Số phòng bếp</label>
                                <input type="text" class="form-control" id="post-news-kitchen" placeholder="Nhập số phòng">
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-bathroom">Số phòng tắm</label>
                                <input type="text" class="form-control" id="post-news-bathroom" placeholder="Nhập số phòng">
                            </div>
                        </div>
                        <div class="row">
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-other">Số phòng khác</label>
                                <input type="text" class="form-control" id="post-news-other" placeholder="Nhập số phòng">
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-donate">Số tầng</label>
                                <input type="text" class="form-control" id="post-news-donate" placeholder="Nhập số tầng">
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-incense">Hướng nhà</label>
                                <select class="form-control" id="post-news-incense">
                                    <option>Đông</option>
                                    <option>Tây</option>
                                    <option>Nam</option>
                                    <option>Bắc</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-nation">Đưa tin lên vị trí đầu</label>
                                <select class="form-control" id="post-news-nation">
                                    <option>Up tin</option>
                                </select>
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-province">Tỉnh thành</label>
                                <select class="form-control" id="post-news-province">
                                    <option>Nghệ an</option>
                                </select>
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-district">Quận/Huyện</label>
                                <select class="form-control" id="post-news-district">
                                    <option>Cửa lò</option>
                                </select>
                            </div>
                            <div class="vmt-form-post form-group col-md-3">
                                <label for="post-news-street">Phường xã</label>
                                <select class="form-control" id="post-news-street">
                                    <option>Đông quan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="vmt-form-post form-group col-md-6">
                                <label for="post-news-road">Đường phố</label>
                                <input type="text" class="form-control" id="post-news-road" placeholder="Nhập tên đường">
                            </div>
                            <div class="vmt-form-post form-group col-md-6">
                                <label for="post-news-google-map">Google Map</label>
                                <input type="text" class="form-control" id="post-news-google-map" placeholder="Nhập địa chỉ google map">
                            </div>
                        </div>
                        <div class="row">
                            <div class="vmt-form-post form-group col-md-12">
                                <label for="post-news-project">Chọn dự án</label>
                                <select class="form-control" id="post-news-project">
                                    <option>Ba son</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="vmt-form-post form-group col-md-6">
                                <label for="post-news-furniture">Nội thất</label>
                                <textarea class="form-control" id="post-news-furniture" rows="3"></textarea>
                            </div>
                            <div class="vmt-form-post form-group col-md-6">
                                <label for="post-news-description">Mô tả</label>
                                <textarea class="form-control" id="post-news-description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="vmt-form-post form-group col-md-12">
                                <label for="post-news-image-avatar">Ảnh đại diện</label>
                                <label class="custom-file post-news-choose-image">
                                    <input type="file" id="post-news-image-avatar" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="vmt-form-post form-group col-md-12">
                                <label for="post-news-image-album">Album ảnh</label>
                                <label class="custom-file post-news-choose-image">
                                    <input type="file" id="post-news-image-album" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="vmt-form-post form-group col-md-12">
                                <label for="post-news-content">Nội dung</label>
                                <textarea class="form-control" id="post-news-content" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="vmt-form-post form-group col-md-12">
                                <label for="post-news-tag">Nhãn</label>
                                <input type="text" class="form-control" id="post-news-tag" placeholder="Nhập tên nhãn">
                            </div>
                        </div>
                        <button type="button" class="btn btn-success">Đăng tin</button>
                        <button type="button" class="btn btn-danger">Huỷ bỏ</button>
                    </form>





                </div>

                <!--title bất động sản nổi bật-->
                <div class="items_title_color text-left">
                    <h2>Bất động sản liên quan</h2>
                </div>
                <!--bất động sản nổi bật-->
                <article class="row box-involve text-center placeholders">

                    <div class="item-special col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 pb-4">
                        <div class="box-shop-item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="box-thumb row">
                                    <a href="#">
                                        <img src="images/img/1.jpg" alt="Căn hộ 2PN tại Pearl Plaza">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="text-left title-content-product">
                                        <h3><a href="#">Căn hộ 2PN tại Pearl Plaza Căn hộ 2PN tại Pearl Plaza</a></h3>
                                    </div>
                                    <div class="text-left price-content-product">
                                        <span class="price">250 triệu/m<sup>2</sup></span> 100m<sup>2</sup>
                                    </div>
                                    <div class="adress-home">Phường 13, Quận 10, TP. HCM</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-special col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 pb-4">
                        <div class="box-shop-item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="box-thumb row">
                                    <a href="#">
                                        <img src="images/img/2.jpg" alt="Căn hộ 2PN tại Pearl Plaza">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="text-left title-content-product">
                                        <h3><a href="#">Căn hộ 2PN tại Pearl Plaza Căn hộ 2PN tại Pearl Plaza</a></h3>
                                    </div>
                                    <div class="text-left price-content-product">
                                        <span class="price">250 triệu/m<sup>2</sup></span> 100m<sup>2</sup>
                                    </div>
                                    <div class="adress-home">Phường 13, Quận 10, TP. HCM</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-special col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 pb-4">
                        <div class="box-shop-item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="box-thumb row">
                                    <a href="#">
                                        <img src="images/img/3.jpg" alt="Căn hộ 2PN tại Pearl Plaza">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="text-left title-content-product">
                                        <h3><a href="#">Căn hộ 2PN tại Pearl Plaza Căn hộ 2PN tại Pearl Plaza</a></h3>
                                    </div>
                                    <div class="text-left price-content-product">
                                        <span class="price">250 triệu/m<sup>2</sup></span> 100m<sup>2</sup>
                                    </div>
                                    <div class="adress-home">Phường 13, Quận 10, TP. HCM</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-special col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 pb-4">
                        <div class="box-shop-item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="box-thumb row">
                                    <a href="#">
                                        <img src="images/img/4.jpg" alt="Căn hộ 2PN tại Pearl Plaza">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="text-left title-content-product">
                                        <h3><a href="#">Căn hộ 2PN tại Pearl Plaza Căn hộ 2PN tại Pearl Plaza</a></h3>
                                    </div>
                                    <div class="text-left price-content-product">
                                        <span class="price">250 triệu/m<sup>2</sup></span> 100m<sup>2</sup>
                                    </div>
                                    <div class="adress-home">Phường 13, Quận 10, TP. HCM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!--end bất động sản nỏi bật-->
            </main>
        <!--end main-->

        <!--sidebar right-->
            <div class="col-xl-3 blog-sidebar one-show-desktop">
                <div class="advertisement">
                    <div class="form-search-house p-3">
                        <div class="box-check-species">
                            <ul class="nav nav-tabs">
                                <li class="nav-tabs-item active" data-name=" ban">
                                    <a href="javascript:void(0)" class="trantypeitem" data-id="864">Bán</a>
                                </li>
                                <li class="nav-tabs-item" data-name=" chothue">
                                    <a href="javascript:void(0)" class="trantypeitem" data-id="865">Cho thuê</a>
                                </li>
                                <li class="nav-tabs-item" data-name=" mua">
                                    <a href="javascript:void(0)" class="trantypeitem" data-id="871">Mua</a>
                                </li>
                                <li class="nav-tabs-item" data-name=" thue">
                                    <a href="javascript:void(0)" class="trantypeitem" data-id="870">Thuê</a>
                                </li>
                            </ul>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <input class="form-control" placeholder="Nhập từ khoá.." type="text" value="" id="example-text-input">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Loại bất động sản</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Tỉnh/Thành phố</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Quận/Huyện</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Phường/Xã</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Đường/Phố</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Diện tích</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Mức giá</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Dự án</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Tìm kiếm</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="news-feed">
                    <div class="items_title_color text-left">
                        <h2>Tin tức</h2>
                    </div>
                    <div class="box-image">
                        <div class="row fix-box">
                            <div class="fix-image-news col-md-5 col-sm-5 col-sx-5">
                                <a href="#" class="image-news" style="background-image: url('images/img/2.jpg');"></a>
                            </div>
                            <div class="fix-title-news col-md-7 col-sm-7 col-sx-7">
                                <a href="#" class="title-news">
                                    Biến ngôi nhà ẩm thấp thành nơi ở sang chảnh như khách sạn
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box-image">
                        <div class="row fix-box">
                            <div class="fix-image-news col-md-5 col-sm-5 col-sx-5">
                                <a href="#" class="image-news" style="background-image: url('images/img/2.jpg');"></a>
                            </div>
                            <div class="fix-title-news col-md-7 col-sm-7 col-sx-7">
                                <a href="#" class="title-news">
                                    Biến ngôi nhà ẩm thấp thành nơi ở sang chảnh như khách sạn
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box-image">
                        <div class="row fix-box">
                            <div class="fix-image-news col-md-5 col-sm-5 col-sx-5">
                                <a href="#" class="image-news" style="background-image: url('images/img/2.jpg');"></a>
                            </div>
                            <div class="fix-title-news col-md-7 col-sm-7 col-sx-7">
                                <a href="#" class="title-news">
                                    Biến ngôi nhà ẩm thấp thành nơi ở sang chảnh như khách sạn
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box-image">
                        <div class="row fix-box">
                            <div class="fix-image-news col-md-5 col-sm-5 col-sx-5">
                                <a href="#" class="image-news" style="background-image: url('images/img/2.jpg');"></a>
                            </div>
                            <div class="fix-title-news col-md-7 col-sm-7 col-sx-7">
                                <a href="#" class="title-news">
                                    Biến ngôi nhà ẩm thấp thành nơi ở sang chảnh như khách sạn
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box-image">
                        <div class="row fix-box">
                            <div class="fix-image-news col-md-5 col-sm-5 col-sx-5">
                                <a href="#" class="image-news" style="background-image: url('images/img/2.jpg');"></a>
                            </div>
                            <div class="fix-title-news col-md-7 col-sm-7 col-sx-7">
                                <a href="#" class="title-news">
                                    Biến ngôi nhà ẩm thấp thành nơi ở sang chảnh như khách sạn
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box-image">
                        <div class="row fix-box">
                            <div class="fix-image-news col-md-5 col-sm-5 col-sx-5">
                                <a href="#" class="image-news" style="background-image: url('images/img/2.jpg');"></a>
                            </div>
                            <div class="fix-title-news col-md-7 col-sm-7 col-sx-7">
                                <a href="#" class="title-news">
                                    Biến ngôi nhà ẩm thấp thành nơi ở sang chảnh như khách sạn
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box-image">
                        <div class="row fix-box">
                            <div class="fix-image-news col-md-5 col-sm-5 col-sx-5">
                                <a href="#" class="image-news" style="background-image: url('images/img/2.jpg');"></a>
                            </div>
                            <div class="fix-title-news col-md-7 col-sm-7 col-sx-7">
                                <a href="#" class="title-news">
                                    Biến ngôi nhà ẩm thấp thành nơi ở sang chảnh như khách sạn
                                </a>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
            <!--end sidebar right-->
        </section>
        <!--end box content-->

<?php include_once ('footer.php');?>