<template>
<div>

  <div class="footer">
    <div class="container">
      <div class="__logo">
        <a href="/">
          <img src="/images/flame-icon.png" style="width:60px;height:90px;" alt="PolyTherm Logo">
          <img src="/images/polytext2.png" style="width:200px;height:55px; padding-left:15px; padding-bottom: 5px;" alt="PolyTherm Logo">
        </a>
      </div>
      <!-- <h6>
        Copyright <a href="/">PolyTherm</nuxt-link> {{ getYear() }}
      </h6> -->
      <div class="__duo">
        <div class="__links">
          <a href="/about">About</a>
          <a href="/how-it-works">How it works?</a>
          <a href="/faq">FAQs</a>
          <a href="/partners">Partners</a>
        </div>
        <div class="__links">
          <a href="/terms">Terms</a>
          <a href="/privacy">Privacy Policy</a>
          <a href="/contact">Contact</a>
        </div>
        <div class="__disclaimer">
          <p>
            PolyTherm is sells advanced machinery and cutting edge technology.
            PolyTherm has partnered with blah blah blah.
            THIS IS PLACE HOLDER TEXT..
            Let me know what wording you would like in the footer section.
            blah blah blah blah blah blah blah blah blah blah blah blah
            blah blah blah blah blah blah blah blah blah blah blah blah
            blah blah blah blah blah blah blah blah blah blah blah blah
          </p>
        </div>
      </div>
      
    </div>
  </div>
</div>
</template>

<script>


export default {
  data(){
    return {

    };
  },
  mounted() {
    console.log("footer mounted");

  },
  components: {

  },

  methods:{
    /**
     * Get Current Year
     * @return
     */
    getYear(){
      return new Date().getFullYear();
    }
  }
};
</script>

<style>

</style>
