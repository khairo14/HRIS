<template>
    <div class="wrapper">
        <div class="container">
            <login/>
            <router-view/>
        </div>
    </div>
</template>

<script>
import login from './login';

export default {
    components: {
        login,
    }
}
</script>
