<template>
    <div ref = "post" class = "post">
        <div class="post-head">
            <div class = "head-0">
                <img :src="author_image" alt="" />
            </div>

            <div class = "head-1">
                <h1><span>{{ name }}</span> <span style = "padding-bottom : 2px;">.</span> <a href="">follow</a></h1>
                <p>{{ bio }}</p>
            </div>

            <div class = "head-2">
                <i class = "bi bi-grip-horizontal"></i>
            </div>
        </div>

        <div class="post-content">
            <h2> {{ body }} </h2>
            
            <br />
    
            <div class = "post-media">
                <a href=""><img :src="img_name" alt=""></a>
            </div>
        </div>

        <div class="post-foot">
            <div class="m-clickables">
                <div @click="impressed()">
                    <i ref = "heart" class = "bi bi-heart-fill"></i>
                </div>
            
                <div>
                    <i class="bi bi-chat-text"></i>
                </div>
            
                <div @click="share()">
                    <i ref = "share" class="bi bi-share"></i>
                </div>
            </div>
            
        
        </div>

        <div class="interests">
            <div>
                <p>
                    {{ comments }} <span> comments...</span>
                </p>
                <p>
                    <span>{{ impressions }}</span> likes...
                </p>
            </div>
        </div>
    </div>
</template>

<style scoped>

.redder, .redder:before {
    color : red;
}

.greener, .greener:before {
    color : rgb(34, 255, 34);
}

.bigger {
    font-size : 34px;
}

</style>

<script>
export default {
    props : {
        img_name : String,
        head : String,
        body : String,
        name : String,
        bio : String,
        author_image : String,
        impressions : String,
        comments : String
    },
    mounted() {
        console.log('Component mounted.')
    },
    methods : {
        impressed : function() {
            this.$refs.heart.classList.toggle('redder');
            this.$refs.heart.classList.toggle('bigger');
            res = XMLHttpRequest()
        },
        share : function() {
            this.$refs.share.classList.toggle('greener');
            this.$refs.share.classList.toggle('bigger');
            res = XMLHttpRequest()
        }
    }
}
</script>