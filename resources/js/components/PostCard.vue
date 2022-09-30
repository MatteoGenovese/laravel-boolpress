<template>

        <div class="row">
            <div class="col-12">
                <div class="card mt-3">


                    <div class="card text-center" :style=" `border: 3px solid ${post.category.color} ;`">
                        <div class="card-header" :style=" `border-bottom: 3px solid ${post.category.color} ;`">
                            <router-link class="nav-link" :to="`/posts/${post.id}`">
                                {{ post.title }}
                            </router-link>
                        </div>
                        <div class="card-body">
                            <div class="card-title text-center">
                                <img :src="post.post_image" :alt="post.title" >
                            </div>
                            <p class="card-text">{{ post.post_content }}</p>
                        </div>
                        <footer class="blockquote-footer"> {{ post.user.name }} <cite title="Source Title">{{ post.post_date }}</cite> | Category:
                            <router-link class="nav-link" :to="`/categories/${post.category.id}`">
                                {{ post.category.name }}
                            </router-link>
                        </footer>

                    </div>


                </div>
            </div>
        </div>

</template>

<script>
    export default {
        name : 'PostCard',
        props:{
            post:Object,
        }
    };
</script>

<style>

</style>
