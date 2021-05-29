<template>
<div class="wrapper">
    <!-----header------------->
        <div class="header">
            <div class="col-md">
                <h5>profile</h5>
            </div>
        </div>
    <!-----header------------->
    <!-----sidebar------------->
        <div class="navi">
            <h5>Logo</h5>
            <ul>
                <li>
                    <router-link to="/">Home</router-link>
                </li>
            </ul>
            <ul>
                <li>
                    <router-link to="/login">Login</router-link>
                </li>
            </ul>
        </div>
    <!-----sidebar------------->
    <router-view/>
</div>
</template>

<script>
export default {

}
</script>
