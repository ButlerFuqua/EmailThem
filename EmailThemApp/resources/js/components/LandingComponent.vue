<template>
  <div class="signupContainer" :class="imageClass">
    <div class="leftSide">
      <info-component doAnimate="true"></info-component>
    </div>

    <div class="rightSide">
      <div class="mobileImgBG"></div>

      <div
        class="d-flex flex-column justify-content-center align-content-center align-items-center"
      >
        <div class="mobileOnly heading">
          <h1 class="display_font">Anime Dating</h1>
        </div>
        <div class="theContent mb-3">
          <h3 class="display_font">Are you on the list!?</h3>
          <p>Submit your email to be notified of the launch date and to learn more about this project.</p>
        </div>
        <div class="theContent shadow-lg formContent">
          <form action="/signups" method="post">
            <input type="hidden" name="_token" :value="csrf" />
            <div class="form-group">
              <label for="email">Enter your email</label>
              <input
                id="email"
                name="email"
                type="email"
                class="form-control position-relative shadow-sm"
                placeholder="you@email.com"
                required
                autocomplete="off"
              />
              <div class="btnContainer">
                <button type="submit" class="shadow">
                  Submit
                  <span class="wave_1"></span>
                  <span class="wave_2"></span>
                  <span class="wave_3"></span>
                </button>
              </div>
            </div>
          </form>
        </div>
        <div v-if="count >= 1" class="d-flex align-items-center theContent mt-3">
          <p class="mb-0">
            <strong style="font-size: 2.5rem;" class="display_font mr-1">{{ count }}</strong>
          </p>
          <p class="mb-0">people have already signed up to be notified!</p>
        </div>
      </div>
    </div>
  </div>
</template>




<script>
export default {
  methods: {
    getRandomInt(max) {
      return Math.floor(Math.random() * Math.floor(max));
    }
  },
  mounted() {
    if (this.getRandomInt(10) < 5) {
      this.imageClass = "couple";
    } else {
      this.imageClass = "female";
    }

    console.log(this.imageClass);
  },
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      imageClass: ""
    };
  },
  props: ["sessionMessage", "sessionLink", "count"]
};
</script>


<style scoped>
.signupContainer.female .leftSide {
  background: url("/images/standard_landing.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.signupContainer.couple .leftSide {
  background: url("/images/real_couple.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

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

.theContent {
  position: relative;
  opacity: 0;
  animation: showForm 0.8s 2.5s 1 forwards;
}
@keyframes showForm {
  0% {
    bottom: 1rem;
    opacity: 0;
  }
  100% {
    bottom: 0;
    opacity: 1;
  }
}

/* Mobile */

@media (max-width: 500px) {
  .rightSide {
    position: relative;
    top: 100vh;
    animation: animeRightDesktop 1s 0s 1 forwards;
  }

  @keyframes animeRightDesktop {
    0% {
      opacity: 0;
      top: 100vh;
    }
    100% {
      opacity: 1;
      top: 0vh;
    }
  }

  .theContent {
    position: relative;
    opacity: 0;
    animation: showForm 0.8s 1.5s 1 forwards;
  }
  @keyframes showForm {
    0% {
      bottom: 1rem;
      opacity: 0;
    }
    100% {
      bottom: 0;
      opacity: 1;
    }
  }

  .mobileOnly.heading {
    opacity: 0;
    animation: mobileHeading 0.8s 1s 1 forwards;
  }
  @keyframes mobileHeading {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }

  .mobileImgBG {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0.5;
  }

    .female .mobileImgBG {
    background: url("/images/standard_landing.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }

    .couple .mobileImgBG {
    background: url("/images/real_couple.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
}
</style>
