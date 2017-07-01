<?php include_once ('header.php');?>
        <!--box content-->
        <section class="box-content row">
        <!--main-->
            <main class="form-register col-md-6 offset-md-3 col-xs-12">
                <h3>Mời bạn nhập thông tin</h3>
                <form action="">
                    <div class="form-group row">
                        <div class="col-10 offset-1">
                            <input class="form-control" type="text" placeholder="Tên đăng nhập">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10 offset-1">
                            <input class="form-control" type="text" placeholder="Họ & tên">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10 offset-1">
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10 offset-1">
                            <input class="form-control" type="email" placeholder="Email" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10 offset-1">
                            <input class="form-control" type="tel" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10 offset-1">
                            <input class="form-control" type="password" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-10 offset-1">
                            <input class="form-control" type="password" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary pl-5 pr-5 mr-3">Đăng ký</button>
                            <button type="button" class="btn btn-primary pl-5 pr-5">Huỷ bỏ</button>
                        </div>
                    </div>
                </form>
            </main>
        <!--end main-->
        </section>
        <!--end box content-->

<?php include_once ('footer.php');?>