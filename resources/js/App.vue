<template>
  <div id="app">
    <router-view />
  </div>
</template>

<style lang="scss">
html, body {
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0 auto;
  background-color: #EEEEEE;
  height: 100%;
  width: 100%;
}
#app {
  min-height: 100vh !important;
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  
}
.button {
    font-weight: 550;
    background-color: #1aad8d;
    color: white;
}

.button:hover {
  color: #1aad8d;
  background-color: #D5F0EA;
}

.button-light:hover {
  color: #1aad8d;
}
// #nav {
//   padding: 30px;
//   a {
//     font-weight: bold;
//     color: #2c3e50;
//     &.router-link-exact-active {
//       color: #42b983;
//     }
//   }
// }
</style>
