<template>
  <div>
        <!-- <LoadingBar :loading="this.$store.state.loadingStatus"></LoadingBar> -->
        <router-view></router-view>
    </div>
</template>

<script>
// import Swal from 'sweetalert2';
import LoadingBar from './LoadingComponent';
export default {
    name: 'AppComponent',

    beforeUpdate() {
    },

    created() {
    },

    updated() {
    },

    data() {
        return {
        };
    },

    methods: {
    },

    components: {
      LoadingBar
    },
}
</script>
<style>

    @import url('/css/common.css');
    #app {
  display: flex;
  flex-direction: column;
  min-height: 100vh;

  > header {
    position: sticky;
    top: 0;
    z-index: 1000;
  }

  > footer {
    margin-top: auto; /* footer를 #app의 맨 아래로 보냄 */
  }
}
</style>