<template>
    <li class="container">
        <img src="images/friend.png" alt="">
        <h3>{{suggestion}}</h3>
        <div id = fol>
            <i style = "font-style : 24px;" class = "bi bi-plus"></i><p>follow</p>
        </div>
    </li>
</template>

<style scoped>
    li {
        height : 76px;
        width : 90%;
        background : rgb(207, 207, 207);
        margin : 8px;
        border-radius : 8px;
        color : white;
        padding : 12px;
        font-size : 1.2em;
    }

    img {
        height : 30px;
        width : 30px;
        border-radius : 50%;
        float : left;
        background : white;
    }

    li > * {
        margin : 6px;
    }

    #fol {
        display : flex;
        justify-content : space-around;
        align-items : center;
        height : 24px;
        width : 80px;
        border-radius : 4px;
        background : white;
        color : grey;
    }
</style>

<script>
    export default {
        props : {
            suggestion : String
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
