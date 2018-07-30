<template>
<div>

  <div class="hero">

      <!-- <template>
      <vue-particles style="width:100%;height:100%"
        color="#dedede"
        :particleOpacity="0.7"
        :particlesNumber="80"
        shapeType="circle"
        :particleSize="4"
        linesColor="#dedede"
        :linesWidth="1"
        :lineLinked="true"
        :lineOpacity="0.4"
        :linesDistance="150"
        :moveSpeed="3"
        :hoverEffect="true"
        hoverMode="grab"
        :clickEffect="true"
        clickMode="push"
      >
      </vue-particles>
      </template> -->
      <!-- <img class="__home_image a1 fadeIn" src="~/static/finch/B2BChar.svg" style="width:480px;height:480px; position: absolute; right:-15px;" align="right"> -->
      <template>
        
        <!-- <div class="home--form animated fadeInLeft">
          <el-form :inline="false" label-position="top" label-width="100px" :model="form" ref="requirements" :rules="rules">
            <el-form-item label="Loan Amount" prop="loan_amount">
              <el-input v-model.number="form.loan_amount" autofocus>
                <template slot="prepend">R</template>
              </el-input>
            </el-form-item>
            <el-form-item label="Registered Company Name" prop="company_name">
              <el-input v-model="form.company_name"></el-input>
            </el-form-item>
            <el-form-item label="Email" prop="email">
              <el-input v-model="form.email"></el-input>
            </el-form-item>
            <el-form-item label="">
              <el-button @click="beginApplication()" type="primary">Get Loan Offers Now</el-button>
            </el-form-item>
          </el-form>
          
        </div> -->
        <div class="__prompt">
          <h1>PolyTherm is dedicated to making the world a better place by creating machinary and cunting edge technology which allows plastic to be recycled and used to fuel the future!</h1>
          <h3>We are dedicated to blah blah blah...</h3>
        </div>

        <!-- <div class="wrap-banner">
        <div class="main-title">
          <h1>PolyTherm is dedicated to making the world a better place by creating machinary and cunting edge technology which allows plastic to be recycled and used to fuel the future!</h1>
          <h3>We are dedicated to blah blah blah...</h3>
        </div>
        </div> -->
        <!-- <vue-particles :is="asyncComp" style="width:100%;height:100%;position:absolute"
        color="#dedede"
        :particleOpacity="0.7"
        :particlesNumber="80"
        shapeType="circle"
        :particleSize="4"
        linesColor="#dedede"
        :linesWidth="1"
        :lineLinked="true"
        :lineOpacity="0.4"
        :linesDistance="150"
        :moveSpeed="3"
        :hoverEffect="true"
        hoverMode="grab"
        :clickEffect="true"
        clickMode="push"
      >
      </vue-particles> -->
       
      </template>
      <!-- <div class="__slogan" v-if="$nuxt.$route.path === '/apply'">
        <h1>Business Loan Application</h1>
      </div> -->
       
    </div>

  <div class="headline __invert">
    <h1>We Turn Plastic into Fuel with <span class="highlight">Cutting Edge Technology</span></h1>
    <div class="__cta">
      <a href="/how-it-works">
        <el-button type="success">How it works</el-button>
      </a>
    </div>
  </div>

  

  <div class="why">
    <div class="headline">
    <h1><span class="highlight">What</span> is PolyTherm?</h1>
  </div>
    <div class="__icons">
      <div class="__icon">
          
      <img src='/images/Film shredder.jpg' style="width:100%">

        <h2>Awesome Machinery and cutting edge technology</h2>
        <p style="text-align:center">
            PolyTherm is ... Insert more text here
        </p>
      </div>
      <div class="__icon">
          
      <img src='/images/Granulator.jpg' style="width:100%">

        <h2>Place Holder Text</h2>
        <p style="text-align:center">
            Add More text. Blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah 
        </p>
      </div>
      <div class="__icon">
          
      <img src='/images/Aglomorator.jpg' style="width:100%">

        <h2>Place Holder Text</h2>
        <p style="text-align:center">
           Add More text. Blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah 
        </p>
      </div>
    </div>

    <div class="__icons">
      <div class="__icon">
          
      <img src='/images/double shaft shredder.jpg' style="width:100%">

        <h2>Awesome Machinery and cutting edge technology</h2>
        <p style="text-align:center">
            PolyTherm is ... Insert more text here
        </p>
      </div>
      <div class="__icon">
          
      <img src='/images/label remover 3.jpg' style="width:100%">

        <h2>Place Holder Text</h2>
        <p style="text-align:center">
            Add More text. Blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah 
        </p>
      </div>
      <div class="__icon">
          
      <img src='/images/vertical dewaterizer.jpg' style="width:100%">

        <h2>Place Holder Text</h2>
        <p style="text-align:center">
           Add More text. Blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah 
        </p>
      </div>
    </div>
  </div>

  <div class="headline __invert">
    <h1>Our <span class="highlight">Partners</span></h1>
  </div>

  <div class="partners">
    <el-carousel :interval="4000" type="card" height="500px" indicator-position="none" arrow="never">
      <el-carousel-item>
        <div class="__partner--demo">
          <div class="__left">
            <p>
              Retail Capital is a pioneer in the merchant factoring space. Since inception Retail capital has grown
              its distribution network far and wide which enables them to originate loans to all types of
              businesses...
            </p>
            <a href="/partners">
              <el-button type="success" size="tiny">Read More</el-button>
            </a>
          </div>
          <div class="offers ">
            <div class="__offer">
              <div class="__logo">
                <img src="/rc-logo.png" alt="Rc Loans">
              </div>
              <div class="__head">
                <h4>Retail Capital</h4>
              </div>
              <div class="__cta">
                <el-button type="success">Accept Offer</el-button>
              </div>
            </div>
          </div>
        </div>
      </el-carousel-item>
      <el-carousel-item>
        <div class="__partner--demo">
          <div class="__left">
            <p>
              Lulalaend is one of the pioneers of the SMME finance industry in South Africa and is one of the
              fastest growing business financiers in the world. Through their proprietary technology, Lulalend can
              originate loans in just two days. Lulalend focuses in the unsecured lending sector with a focus on
              facilitation of working capital that can be paid back in a six-month period...
            </p>
            <a href="/partners">
              <el-button type="success" size="tiny">Read More</el-button>
            </a>
          </div>
          <div class="offers">
            <div class="__offer">
              <div class="__logo">
                <img src="/lulalend.png" alt="Lualend">
              </div>
              <div class="__head">
                <h4>Lulalend</h4>
              </div>
              <div class="__cta">
                <el-button type="success">Accept Offer</el-button>
              </div>
            </div>
          </div>
        </div>
      </el-carousel-item>
      <el-carousel-item>
        <div class="__partner--demo">
          <div class="__left">
            <p>
              Genfin was started in 2010 with the aim of originating loans that the formal banking sector was not
              able to facilitate. Since incorporation, Genfin has become a market leader in the business lending
              space. Over the years, the Genfin team and technology have introduced new lending products to the
              SMME market mainly being, unsecured finance, secured finance and invoice discounting...
            </p>
            <a href="/partners">
              <el-button type="success" size="tiny">Read More</el-button>
            </a>
          </div>
          <div class="offers">
            <div class="__offer">
              <div class="__logo">
                <img src="/genfin.svg" alt="Genfin SVG">
              </div>
              <div class="__head">
                <h4>Genfin Finance</h4>
              </div>
              <div class="__cta">
                <el-button type="success">Accept Offer</el-button>
              </div>
            </div>
          </div>
        </div>
      </el-carousel-item>
      <el-carousel-item>
        <div class="__partner--demo">
          <div class="__left">
            <p>
              Brighton is a peer-to- peer enterprise lending platform. The platform is designed to originate
              business loans to the SMME sector that form part of large corporations or State-owned entity’s
              supply chains.
            </p>
            <a href="/partners">
              <el-button type="success" size="tiny">Read More</el-button>
            </a>
          </div>
          <div class="offers">
            <div class="__offer">
              <div class="__logo">
                <img src="/brighton.png" alt="Genfin SVG">
              </div>
              <div class="__head">
                <h4>Bright On Capital</h4>
              </div>
              <div class="__cta">
                <el-button type="success">Accept Offer</el-button>
              </div>
            </div>
          </div>
        </div>
      </el-carousel-item>
    </el-carousel>
  </div>

  <!-- <div class="headline __invert">
    <div class="__cta">
      <a href="/partners">
        <el-button type="primary">Learn More About Our Partners</el-button>
      </a>
    </div>
  </div> -->

  <div>

  <div class="section">
    <div class="__text">
      <h1>
        Checkout Our Gallery of Awesome Shit
      </h1>
    </div>
    <a href="/about">
      <el-button type="success">Machines!</el-button>
    </a>
  </div>

</div>


</div>
</template>

<script>
// import localforage from "localforage";
// import section from "../components/apply-section";
// import anime from "animejs";
//import element from "element";

export default {
  head() {
    return {
      title: "Home"
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
    console.log("Home Mounted");
    // localforage.setItem("lead", "fish").then(() => {
    //   //
    // });
    // localforage
    //   .getItem("lead")
    //   .then(value => {
    //     if (value !== null) {
    //       console.log(value);
    //     }
    //   })
    //   .catch(err => {});

    anime
      .timeline({
        loop: 9,
        direction: "alternate"
      })
      .add({
        targets: ["#__apply .lines path", ".__icon h2"],
        opacity: {
          value: 1,
          duration: 1000
        },
        fill: [{ value: "#eef4f9" }, { value: "#0263a0" }],
        easing: "linear"
      })
      .add({
        targets: ["#__select .lines path", ".__icon h2"],
        opacity: {
          value: 1,
          duration: 1000
        },
        fill: [{ value: "#eef4f9" }, { value: "#0263a0" }],
        easing: "linear",
        offset: "-=200"
      })
      .add({
        targets: ["#__contact .lines path", ".__icon h2"],
        opacity: {
          value: 1,
          duration: 1000
        },
        fill: [{ value: "#eef4f9" }, { value: "#0263a0" }],
        easing: "linear",
        offset: "-=200"
      });
  },
  components: {
    //"apply-section": section
  }
};
</script>

<style>

</style>
