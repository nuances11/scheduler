<!-- begin login -->
        <div class="login bg-black animated fadeInDown">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    Login
                </div>
                <div class="icon">
                    <i class="ion-ios-locked"></i>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <div id="err"></div>
                <form id="user_login" method="POST" class="margin-bottom-0" data-url="<?php echo base_url();?>">
                    <div class="form-group m-b-20">
                        <input type="text" name="email" class="form-control input-lg inverse-mode no-border" placeholder="Email Address" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" name="password" class="form-control input-lg inverse-mode no-border" placeholder="Password"/>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Sign me in</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end login -->
