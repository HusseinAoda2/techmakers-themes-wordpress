<!-- ======= Search Form ======= -->
<div id="footer">
    <div class="footer-newsletter"  style="background: #FFFFFF;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Search</h4>
                    <form action="<?php /* توجيه البحث للصفحة الرئيسية */ echo home_url('/') ?>" method="get" style="background: #f3f5fa;">
                        <input name="s" style="background: #f3f5fa; border: 0; padding: 4px 8px; width: calc(100% - 100px);">
                        <input type="submit" value="Submit" style="background: #47b2e4; position: absolute; font-size: 16px; padding: 0 20px; transition: 0.3s; border-radius: 50px; box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Search Form -->
