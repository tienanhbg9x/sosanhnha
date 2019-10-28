<template>
    <header class="top-bar">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-md-2 logo">
                    <a href="/crm"> <img alt="sosanhnha.vn" src="tải%20xuống.png"
                                         style="height: 30px">
                    </a>
                    <!-- responsive top menu bar icon -->

                    <!-- end responsive menu bar icon -->
                    <i class='fa fa-search' id='searchFeatures' title='Tìm chức năng'></i>
                </div>
                <!-- end logo -->
            </div>
            <!-- /row -->
        </div>
        <nav style="display: none;" id="mainMenuLeftMobile">
            <ul id="parentMenuLeftMobile" class="bgParentMenuLeft"></ul></nav>
    </header>
</template>

<script>
    export default {
        name: "loginHeader.vue"
    }
</script>

<style scoped>
    .top-bar{
        left: -250px !important;
        background-color: rgb(247, 56, 56);
    }
    .logo {
        position:relative;
        top:20px;
        margin-bottom:40px;
        box-sizing: border-box;
        color: rgb(247, 56, 56);
        text-decoration: none solid rgb(247, 56, 56);
        text-size-adjust: 100%;
        column-rule-color: rgb(247, 56, 56);
        perspective-origin: 0px 0px;
        transform-origin: 0px 0px;
        caret-color: rgb(247, 56, 56);
        border: 0px none rgb(247, 56, 56);
        font: normal normal 400 normal 13px / 18.5714px "Helvetica Neue", Helvetica, Arial, sans-serif;
        outline: rgb(247, 56, 56) none 0px;
    }
</style>