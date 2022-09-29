<template>

        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-title">
                        {{ post.title }}
                    </div>
                    <div class="card-title">
                        <img :src="post.post_image" :alt="post.title" >
                    </div>
                    <div class="card-content">
                        {{ post.post_content }}
                    </div>
                </div>
            </div>
        </div>

</template>

<script>
    export default {
        name : 'PostCard',
        props:['post']
    };
</script>

<style>

</style>
