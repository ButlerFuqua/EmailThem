<template>
  <div class="signupContainer female">
    <div class="leftSide">
      <div class="cardLine cardLine_1"></div>
      <div class="cardBorders">
        <div class="infoCard shadow">
          <h3>Anime Dating</h3>
          <p>A dating website for true fans of Anime.</p>
          <p>Launching February 2020</p>
        </div>
      </div>
      <div class="cardLine cardLine_2"></div>
    </div>

    <div class="rightSide">
      <div class="mobileImgBG"></div>
      <div class="theContent" v-if="sessionMessage">
        <p>{{ sessionMessage }}</p>
        <a v-if="sessionLink" :href="sessionLink">Try again</a>
      </div>
      <div
        v-else
        class="d-flex flex-column justify-content-center align-content-center align-items-center"
      >
        <div class="infoCard shadow mobileOnly">
          <h3>Anime Dating</h3>
          <p>A dating website for true fans of Anime.</p>
          <p>Launching February 2020</p>
        </div>
        <div class="theContent mb-3">
          <p>Submit your email to be notified of the launch date and to learn more about this project.</p>
          <p v-if="count.length >= 1">
            <strong>{{ count }}</strong> people have already signed up to be notified!
          </p>
        </div>
        <div class="theContent shadow-lg">
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
  props: ["sessionMessage", "sessionLink", "count"]
};
</script>


<style scoped>
</style>
