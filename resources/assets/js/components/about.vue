<template>
<div>

  <div class="page">
    <div class="box">
      <div class="__content">
        <h1><span class="highlight">About</span></h1>
        <h2>What is PolyTherm?</h2>
        <p>
          PolyTherm is all about blah blah blah...
          (Please can you guys provide me with content and proper wording for what polyTherm is all about eg: what exactly PolyTherm does, it's mission, what service or products you provide etc.)
        </p>
        <p>
          THIS IS ALL PLACE HOLDER TEXT
          PolyTherm has taken this need to heart. It is our promise to business owners to work hard at helping them gain access
          to finance, in order to grow their businesses.
        </p>
        <br>
        <h2>At PolyTherm, we want to help business build better financial future, one finance step at a time.</h2>
        <p>
          PolyTherm Business is part of the larger PolyTherm Group, known in South Africa as the biggest independent, free comparison
          website. PolyTherm has built and designed the business finance application process on this website so that South African
          businesses have a simple, fast, and trustworthy tool to source business finance.
        </p>
      </div>
    </div>

    <div class="box">
      <div class="__content">
      <h1>How does it work?</h1>
      <p>
        We have partnered with South Africa’s biggest alternative lenders and it is our intention to match borrowers with the most
        appropriate form of finance for their business. Below is a simple summary of our How it works process. <nuxt-link to="/how-it-works">Click here</nuxt-link> to view
        the full process!
      </p>
      <p>
        Each of our partners has provided PolyTherm with details on the types of businesses they finance. We have taken this information
        and designed algorithms to match businesses with the most appropriate alternative financiers.
      </p>
      <p>
        Because our partners are not typical banks or financial institutions, they offer alternative finance options. Once you have
        gone through the application process, you will be presented with a comprehensive comparison of the business finance opportunities
        that match your funding criteria.
      </p>
      <p>
        To read more about this, see
        <nuxt-link to="/how-it-works">How It Works</nuxt-link>.
      </p>
      </div>
    </div>
    <div class="box">
      <div class="__content">
        <h1>
          <span class="highlight">Why</span> use PolyTherm instead of other direct business loan providers?
        </h1>
        <p>
          We are well positioned as one of the only independent business finance comparison websites in South Africa. Our goal is simple
          - we need to find you the most suitable form of finance at the lowest rate. Our proprietary backend and matching allocation
          algorithms have been built from the ground up to do the hard work for you.
        </p>
        <p>
          To find out more about our lending partners, have a look at our partners. On this page, we detail what each of our partner's parameters, and how they do it.
        </p>
        <br>
        <h2>At PolyTherm we also want to make sure your employees are building a healthy financial future!</h2>
        <p>
          A Better financial future starts with knowing where you are. And this means FREE credit scores for all our users.
        </p>
        <p>
          PolyTherm offers all our users free credit scores so they can see how banks measure their financial health. This is done through
          the PolyTherm portal which offers bank-level security, personalised offers and the option to manage your finances.
        </p>
        <p>
          This is only the beginning of the awesome plans up our sleeve! We're happy to know people like you are partnering with us
          to create a healthy financial landscape in South Africa.
        </p>
        <p>
          Here's to South Africa at large making better financial decisions!
        </p>

      </div>
    </div>
  </div>
  <!-- <apply-section></apply-section> -->
</div>
</template>

<script>
import localforage from "localforage";
import section from "../components/apply-section";

export default {
  head(){
    return {
      title: 'About'
    }
  },
  data() {
    return {
      test: "asdas",
      form: {
        name: ""
      }
    };
  },
  mounted() {
    console.log("About Us Mounted");
    window.scroll({
      top: 500,
      left: 0,
      behavior: "smooth"
    });
    localforage.setItem("lead", "fish").then(() => {
      //
    });
    localforage
      .getItem("lead")
      .then(value => {
        if (value !== null) {
          console.log(value);
        }
      })
      .catch(err => {});
  },
  components: {
    'apply-section' : section
  }
};
</script>

<style>

</style>
