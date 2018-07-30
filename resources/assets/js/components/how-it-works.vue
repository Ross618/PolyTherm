<template>
<div>
      <!-- <div class="__content">
      <img src='~/static/finch/How2.png' width=100%>
      </div> -->

      <div class="__content">
      <div class="how-section-header">
        <div class="__text">
          <h1>
            How it Works
          </h1>
          <h2>
            Fincheck Business is dedicated to helping you build a better
            financial future for your business through the process below
          </h2>
        </div>
      </div>
      <div class="box">
      <img src='~/static/finch/favicon.png' style="width:72px; height:72px;">
      </div>
      <div class="how-section-main">

        <div class="__text">

          <h1>
            <img src='~/static/finch/step1-icon.svg' style="float:left; width:400px; height:400px;"> Successful Partnerships
          </h1>
          <p>
            <img src='~/static/finch/Arrow.svg' style="float:right; width:400px; height:400px;"> We have partnered with South Africa's biggest alternative lenders and it is our intention to match borrowers with
            the most appropriate form of finance for their business. Each of our partners has provided Fincheck with details on
            the types of businesses they finance. We have taken this information and designed algorithms to match businesses with
            the most appropriate alternative financiers. Because our partners are not typical banks or financial institutions,
            they offer alternative finance options. Once you have gone through the application process, you will be presented with
            a comprehensive comparison of the business finance opportunities that match your funding criteria.
          </p>
        </div>

      </div>

      <div class="how-section-main" style="background: #eef4f9;">

        <div class="__text">
          <h1 style="text-align:center">

            The Application Process
          </h1>
          <p>
            <img src='~/static/finch/step2-icon.svg' style="float:right; width:400px; height:400px;">
            <img src='~/static/finch/Arrow.svg' style="float:left; width:400px; height:400px; transform: scaleX(-1);"> Your first step is to submit your application and then to select your preferred partner. Fincheck Business will then
            pass your information on to the selected lender(s). The lender(s) will contact you asking for supplementary information
            and documentation. Most of our partners take a week or less to make pay out. Each of our partners has access to our
            proprietary dashboard that shows them your application. Your application is only shown to one preferred partner at
            a time until you have granted a loan OR you ask to be taken out of the system. Most of the above steps happen through
            a custom engine built to meet the needs of our business customers. It's a professional system tailored to your business
            needs. For queries as to where your application is in the process, please feel free to contact us.
          </p>
        </div>

      </div>
      <div class="how-section-main">

        <div class="__text">
          <h1 style="padding-left: 20px">
            <img src='~/static/finch/step3-icon.svg' style="float:left; width:400px; height:400px;"> Do we charge fees?
          </h1>
          <p>
            <img src='~/static/finch/Arrow.svg' style="float:right; width:400px; height:400px;"> Fincheck Business does not charge the borrower any fees. We take a commission from the lender when a successful finance
            application has been completed. It is important for us to do not push our costs to you, the business with a financial
            need.
          </p>
        </div>

      </div>
      <div class="how-section-footer">

        <div class="__text">
          <h1>
            <img src='~/static/finch/step4-icon.svg' style="float:right; width:400px; height:400px;"> How do we find partners?
          </h1>
          <p>
            We aim to be the most comprehensive business finance comparison website in South Africa. Our founders continuously meet with
            current and prospective partners to make sure that Smart Business Loans is providing you with the best service. For
            more information on each of our business partners, please view our partners. You will be able to read about what type
            of financiers they are, their rates and their speed of delivery.
          </p>
        </div>
        
      </div>
      </div>

  <apply-section></apply-section>
  
</div>
</template>

<script>
import localforage from "localforage";
import section from "../components/apply-section";
 

export default {
  head() {
    return {
      title: "How it works?"
    };
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
    console.log("How it Works Mounted");
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
  },
};
</script>

<style>

</style>
