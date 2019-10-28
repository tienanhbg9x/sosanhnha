<template xmlns:v-if="http://www.w3.org/1999/xhtml">
    <div class='bottom'>
        <div class="container">
            <div class="row body1" >
                <div class="col-md-2 left-sidebar">
                    <nav class='main-nav'>
                        <ul class='main-menu'>
                        </ul>
                        <div class="sidebar-minified js-toggle-minified">
                            <i class="fa fa-angle-left"></i>
                        </div>
                    </nav>


                    <!-- <nav class="quickLinkNav"></nav> -->
                </div>
                <div class="col-md-10 content-wrapper">
                    <div id='signin'>
                        <div class="main-header">
                            <h2 class="ab">Đăng nhập</h2>
                            <em class="abc">Welcome!</em>
                        </div>
                        <div class='col-md-6'>
                            <form method="post" name="signinForm" id="signinForm" v-on:submit.prevent="login">
                                <div class="form-horizontal">
                                <input type="hidden" name="csrf" id="csrf" value="">
                                <div class="info info--error" v-if="infoError">Đăng nhập thất bại, vui lòng thử lại</div>
                                <div :class="{ loader }">
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <label class='col-md-4 control-label required'>E-mail: <span class='required'>*</span> </label>
                                            <div class='col-md-8'>
                                                <input v-model.trim="username" type="email" name="username" id="username" class="form-control" value="" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <label class='col-md-4 control-label required'>Mật khẩu: <span class='required'>*</span></label>
                                            <div  class='col-md-8'>
                                                <input v-model.trim="password" type="password" name="password" id="password" class="form-control" value="" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" >
                                            <label class='col-md-4 control-label'></label>
                                            <div class='col-md-8'>
                                                <button type="submit" class="btn btn-primary col-md-12" id="btnSignin">Đăng nhập</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div style='clear:both; padding:12px'>
                             <router-link to="/password-reset">Bạn quên password ? Vào đây để lấy lại password.</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        name: "LoginBody",
        data() {
            return {
                loader: false,
                infoError: false,
                username: '',
                password: ''
            }
        },
        methods: {
            login() {
                this.loader = true;
                this.infoError = false;
                this.$store.dispatch('retrieveToken', {
                        username: this.username,
                        password: this.password
                    }
                )
            }
        }
    }
</script>

<style scoped>
    .content-wrapper {
        bottom: 0px;
        box-sizing: border-box;
        color: rgb(85, 85, 85);
        height: 100%;
        left: 0px;
        min-height: 650px;
        position: relative;
        right: 0px;
        text-decoration: none solid rgb(85, 85, 85);
        text-size-adjust: 100%;
        top: 0px;
        width: 100%;
        column-rule-color: rgb(85, 85, 85);
        perspective-origin: 315px 325px;
        transform-origin: 315px 325px;
        caret-color: rgb(85, 85, 85);
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-top: 0px none rgb(85, 85, 85);
        border-right: 0px none rgb(85, 85, 85);
        border-bottom: 0px none rgb(85, 85, 85);
        border-left: 0.994318px solid rgb(228, 228, 228);
        font: normal normal 400 normal 13px / 18.5714px "Helvetica Neue", Helvetica, Arial, sans-serif;
        outline: rgb(85, 85, 85) none 0px;
        padding: 15px;

    }

    .main-header {
        box-sizing: border-box;
        color: rgb(247, 56, 56);
        height: 50.9091px;
        text-decoration: none solid rgb(85, 85, 85);
        text-size-adjust: 100%;
        width: 599.006px;
        column-rule-color: rgb(85, 85, 85);
        perspective-origin: 299.503px 25.4545px;
        transform-origin: 299.503px 25.4545px;
        caret-color: rgb(247, 56, 56);
        border: 0px none rgb(85, 85, 85);
        font: normal normal 400 normal 13px / 18.5714px "Helvetica Neue", Helvetica, Arial, sans-serif;
        margin: 0px 0px 50px 100px;
        padding-left: 150px;
        outline: rgb(85, 85, 85) none 0px;
    }
    .left-sidebar {
        box-sizing: border-box;
        color: rgb(85, 85, 85);
        display: none;
        min-height: 1px;
        position: relative;
        text-decoration: none solid rgb(85, 85, 85);
        text-size-adjust: 100%;
        column-rule-color: rgb(85, 85, 85);
        caret-color: rgb(85, 85, 85);
        border: 0px none rgb(85, 85, 85);
        font: normal normal 400 normal 13px / 18.5714px "Helvetica Neue", Helvetica, Arial, sans-serif;
        outline: rgb(85, 85, 85) none 0px;
    }
    .bottom {
        box-sizing: border-box;
        color: rgb(85, 85, 85);
        height: 1024px;
        text-decoration: none solid rgb(85, 85, 85);
        text-size-adjust: 100%;
        width: 100%;
        column-rule-color: rgb(85, 85, 85);
        perspective-origin: 315px 325px;
        transform-origin: 315px 325px;
        caret-color: rgb(85, 85, 85);
        border: 0px none rgb(85, 85, 85);
        font: normal normal 400 normal 13px / 18.5714px "Helvetica Neue", Helvetica, Arial, sans-serif;
        outline: rgb(85, 85, 85) none 0px;
    }

    #btnSignin {
        bottom: 0px;
        color: rgb(255, 255, 255);
        cursor: pointer;
        height: 33.0682px;
        left: 0px;
        min-height: 1px;
        position: relative;
        right: 0px;
        text-align: center;
        text-decoration: none solid rgb(255, 255, 255);
        text-size-adjust: 100%;
        top: 0px;
        vertical-align: middle;
        white-space: nowrap;
        column-rule-color: rgb(255, 255, 255);
        align-items: flex-start;
        perspective-origin: 46.5199px 16.5341px;
        transform-origin: 46.5199px 16.5341px;
        user-select: none;
        caret-color: rgb(255, 255, 255);
        background: rgb(41, 110, 170) none repeat scroll 0% 0% / auto padding-box border-box;
        border: 0.994318px solid rgb(36, 97, 149);
        font: normal normal 400 normal 14px / 20px latolight;
        outline: rgb(255, 255, 255) none 0px;
        padding: 6px 15px;
    }
</style>