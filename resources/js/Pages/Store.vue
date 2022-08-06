<template>
    <h1 class="text-center">Store Page</h1>
    <hr />

    <div class="d-flex align-content-between container mr-4">
        <div class="card" v-for="store in stores" :key="store.id">
            <div class="card-header">
                <h5>{{ store.name }}</h5>
            </div>
            <div class="card-body">
                <h5>Stall</h5>
                <ul>
                    <li v-for="stall in store.stalls" :key="stall.id">
                        {{ stall.stall_owner }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
import NavBar from "../Shared/NavBar.vue";
</script>
<script>
export default {
    layout: NavBar,
    props: {
        stores: Array,
    },
};
</script>
