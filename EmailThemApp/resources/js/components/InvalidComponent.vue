<template>
  <div class="signupContainer invalid">
    <div class="leftSide">
      <info-component></info-component>
    </div>

    <div class="rightSide">
      <div class="mobileImgBG"></div>
      <div class="theContent">
        <p>{{ sessionMessage }}</p>
        <a :href="sessionLink">Try again</a>
      </div>
    </div>
  </div>
</template>




<script>
export default {
  mounted() {},
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content")
    };
  },
  props: ["sessionMessage", "sessionLink"]
};
</script>



<style scoped>
.signupContainer.invalid .leftSide {
  background: url("/images/invalid_signup.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

@media (max-width: 500px) {
  .mobileImgBG {
    display: block;
    background: url("/images/invalid_signup.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0.5;
  }
}
</style>
