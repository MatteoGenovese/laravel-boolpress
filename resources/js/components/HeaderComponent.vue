<template>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Boolpress</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <router-link class="nav-link" to="/">
                        Home
                    </router-link>
                </li>

                <li class="nav-item">
                    <router-link class="nav-link" to="/about">
                        About Us
                    </router-link>
                </li>

                <li class="nav-item">
                    <router-link class="nav-link" to="/contacts">
                        Contacts
                    </router-link>
                </li>

            </ul>
        </div>
    </nav>



</template>

<script>
    export default {
        name: "Header"
    }
</script>

<style>

</style>
