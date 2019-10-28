<template>
    <div class="wrapper">
        <LoginHeader/>
        <LoginBody/>
        <LoginFooter/>
        <router-view/>
    </div>
</template>


<script>
    import LoginHeader from './LoginHeader';
    import LoginBody from "./LoginBody";
    import LoginFooter from "./LoginFooter";
    import router from "vue-router"
    import store from "../../store/index"
    export default {
        name: "Login.vue",
        data(){
            return {

            }
        },
        beforeCreate () {
            if (store.state.isLogged) {
                router.push('/')
            }
        },
        methods: {
        },

        components: {
            LoginFooter,
            LoginBody,
            LoginHeader
        }
    }
</script>

<style scoped>
    .wrapper {
        box-sizing: border-box;
        color: rgb(85, 85, 85);
        height: 606.364px;
        text-decoration: none solid rgb(85, 85, 85);
        text-size-adjust: 100%;
        width: 100%;
        column-rule-color: rgb(85, 85, 85);
        perspective-origin: 315px 303.182px;
        transform-origin: 315px 303.182px;
        caret-color: rgb(85, 85, 85);
        background: rgb(236, 236, 236) none repeat scroll 0% 0% / auto padding-box border-box;
        border: 0px none rgb(85, 85, 85);
        font: normal normal 400 normal 13px / 18.5714px "Helvetica Neue", Helvetica, Arial, sans-serif;
        margin: 0px;
        outline: rgb(85, 85, 85) none 0px;
    }

</style>