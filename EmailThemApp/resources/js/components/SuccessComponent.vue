<template>
  <div class="signupContainer success">
    <div class="leftSide">
      <info-component></info-component>
    </div>

    <div class="rightSide">
      <div class="mobileImgBG"></div>
      <div class="theContent">
        <p>{{ sessionMessage }}</p>
        <a :href="sessionLink">Back</a>
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
.signupContainer.success .leftSide {
  background: url("/images/success_page_img.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.rightSide {
  position: relative;
  top: 100vh;
  animation: animeRightDesktop 2s 0s 1 forwards;
}

@keyframes animeRightDesktop {
  0% {
    opacity: 0;
    top: 100vh;
  }
  50% {
    opacity: 0.7;
    top: 0vh;
  }
  100% {
    opacity: 1;
    top: 0vh;
  }
}

.rightSide .theContent {
  position: relative;
  opacity: 0;
  bottom: 1rem;
  animation: animeRightContent 1s 1.2s 1 forwards;
}

@keyframes animeRightContent {
  0% {
    opacity: 0;
    bottom: 1rem;
  }
  100% {
    opacity: 1;
    bottom: 0;
  }
}

@media (max-width: 500px) {
  .mobileImgBG {
    display: block;
    background: url("/images/success_page_img.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0.5;
  }
}

@media (min-width: 500px) {
  .leftSide {
    position: relative;
    right: 100%;
    animation: animeleftDesktop 2s 0s 1 forwards;
  }

  @keyframes animeleftDesktop {
    0% {
      opacity: 0;
      right: 100%;
    }
    50% {
      opacity: 0.7;
      right: 0%;
    }
    100% {
      opacity: 1;
      right: 0%;
    }
  }

  .rightSide {
    position: relative;
    top: 100vh;
    animation: animeRightDesktop 2s 1s 1 forwards;
  }

  @keyframes animeRightDesktop {
    0% {
      opacity: 0;
      top: 100vh;
    }
    50% {
      opacity: 0.7;
      top: 0vh;
    }
    100% {
      opacity: 1;
      top: 0vh;
    }
  }
}
</style>
