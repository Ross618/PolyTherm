<template>
<div>
  <nav class="navbar navbar-light navbar-fixed-top bg-faded ">
    <!-- <h1>Fincheck Business</h1> -->
    <div class="__logo">
      <a href="/">
      <img src="/images/logo2.png" style="width:60px;height:60px;" alt="Poly Logo">
        <img src="/images/PolyText2.png" style="width:160px;height:50px;" alt="Poly Logo">
      </a>

    </div>
    <div class="__links a1 fadeIn">
      <a href="/about">About Us</a>
      <!-- <a href="/gallery">Gallery</a> -->
      <!-- <a href="/how-it-works">How it works?</a> -->
      <a href="/faq">FAQs</a>
      <a href="/partners">Partners</a>
      <a href="/contact">Contact Us</a>
      <!-- <a href="//fincheck.co.za/"><el-button type="success" >Personal Finance</el-button></a>
      <a href="//my.fincheck.co.za/"><el-button type="primary" >My Fincheck</el-button></a> -->
      
    </div>
  </nav>
  <div class="toggle" :class="{ '__visible' : sideBarVisible === true }">
    <i class="material-icons" @click="toggleSidebar()">menu</i>
  </div>
  <div class="sidebar" :class="{ '__visible' : sideBarVisible === true }">
    <div class="__items">
      <div class="__item">
        <a href="/">Home</a>
      </div>
      <div class="__item">
        <a href="/about">About Us</a>
      </div>
      <!-- <div class="__item">
        <a href="/how-it-works">How it works?</a>
      </div> -->
      <div class="__item">
        <a href="/faq">FAQs</a>
      </div>
      <div class="__item">
        <a href="/partners">Partners</a>
      </div>
      <div class="__item">
        <a href="/contact">Contact Us</a>
      </div>
      <!-- <div class="__item">
        <a href="//fincheck.co.za/"><el-button type="success">Personal Finance</el-button></a>
      </div>
      <div class="__item">
        <a href="//my.fincheck.co.za/"><el-button type="primary">My Fincheck</el-button></a>
      </div> -->
    </div>
  </div>
</div>
</template>

<script>
export default {

  data() {
    return {
      sideBarVisible: false,
    }
  },

  methods: {
    /**
     * Toggle Mobile Sidebar
     * @return
     */
    toggleSidebar() {
      this.sideBarVisible = !this.sideBarVisible;
    },

    /**
     * Begin loan application process
     * @return ]
     */
    beginApplication() {
      this.$refs["requirements"].validate(valid => {
        if (valid) {
          localforage.setItem("lead", this.form).then(() => {
            this.form.loan_amount = "",
            this.form.company_name = "",
            this.form.email=  ""
            this.$router.push("apply");
          });
        }
      });
    }
  }

}
</script>

<style>

</style>
