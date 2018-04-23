<template>
    <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="glyphicon glyphicon-globe"></span>
            Notification<span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li v-for="notification in notifications">

            </li>
        </ul>
    </li>
</template>

<script>
    export default {
    }
</script>
