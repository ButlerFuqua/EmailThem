<template>
  <div class="signupContainer female">
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

      <div
        class="d-flex flex-column justify-content-center align-content-center align-items-center"
      >
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
        <div v-if="count.length >= 1" class="d-flex align-items-center theContent mt-3">
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
  mounted() {
    function getRandomInt(max) {
      return Math.floor(Math.random() * Math.floor(max));
    }
  },
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content")
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

.cardBordersContainer {
  width: 100%;
  display: flex;
  align-items: center;
  opacity: 0;

  animation: showCardBordersContainer 0.5s 1s 1 forwards;
}

@keyframes showCardBordersContainer {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
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

.cardBorders {
  max-height: 0;
  border-top: transparent;
  border-bottom: transparent;
  animation: cardBordersAnim 1s 1.5s 1 forwards;
}

@keyframes cardBordersAnim {
  0% {
    max-height: 0;
  }
  15% {
    border-top: 3px solid #1e1e1e;
    border-bottom: 3px solid #1e1e1e;
  }
  100% {
    max-height: 100%;
    border-top: 3px solid #1e1e1e;
    border-bottom: 3px solid #1e1e1e;
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

@media (max-width: 768px) {
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
    animation: showForm 0.8s 1s 1 forwards;
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
}
</style>
