<template>
  <div class="signupContainer invalid">
    <div class="leftSide">
      <div class="cardBordersContainer">
        <div class="cardBorders">
          <div class="infoCard shadow">
            <h3>Anime Dating</h3>
            <p>A dating website for true fans of Anime.</p>
            <p>Launching February 2020</p>
          </div>
        </div>
      </div>
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

@media (max-width: 768) {
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
