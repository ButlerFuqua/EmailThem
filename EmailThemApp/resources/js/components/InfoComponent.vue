<template>
  <div class="cardBordersContainer" :class="{animate: doAnimate}">
    <div class="cardBorders" :class="{animate: doAnimate}">
      <div class="infoCard shadow">
        <h3>Your Title</h3>
        <p>
          <span>Catch Phrase.</span>
        </p>
        <p>Launching February 2020</p>
      </div>
    </div>
  </div>
</template>




<script>
export default {
  mounted() {},
  props: ["doAnimate"]
};
</script>



<style scoped>
.infoCard {
  text-align: center;
  position: relative;
  width: 22rem;
  max-width: 90%;
  padding: 1rem;
  background-image: radial-gradient(
    circle 248px at center,
    #16d9e3 0%,
    #30c7ec 47%,
    #46aef7 100%
  );
  color: #000;
  opacity: 0.8;
}
.infoCard span {
  background: white;
  padding: 3px 6px;
  border-radius: 3px;
  font-weight: bold;
}
.infoCard h3 {
  font-family: "Ma Shan Zheng", cursive;
  font-size: 4rem;
  position: relative;
  transform: rotate(-6deg);
}

.cardBordersContainer.animate {
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

.cardBorders.animate {
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
</style>
