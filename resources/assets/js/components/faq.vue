<template>
<div>
    <div class="page">
      <div class="box">
        <div class="__content">
          <h1><span class="highlight">Frequently Asked</span> Questions</h1>
          <div class="__faq">
            <i class="material-icons">label</i>
            <div>
              <h3>Why Choose PolyTherm?</h3>
              <p>
                THIS IS ALL PLACE HOLDER TEXT. Please provide me with adequate FAQs for PolyTherm.
              </p>
              <p>
                PolyTherm is part of the larger FINCHECK group, known in South Africa as the biggest
                independent, free comparison website. The FINCHECK group has designed PolyTherm to
                allow business owners the ability to quickly and effectively compare business finance options.
              </p>
            </div>
          </div>
          <div class="__faq">
            <i class="material-icons">label</i>
            <div>
              <h3>How does PolyTherm get me a lender?</h3>
              <p>
                PolyTherm compares business finance options for you. As the business owner – you
                simply need to complete the application form, which includes what you are looking for. From there,
                we have an algorithm that will work through your answers and match it to partner criteria* Based on
                these results, our engine will present you with business finance and partners that could best suit
                your needs. This whole process only takes a couple of minutes. *Please note these results are not
                suggestions or advice from PolyTherm or the FINCHECK group, but are results based on
                your needs and partner criteria.
              </p>
            </div>
          </div>
          <div class="__faq">
            <i class="material-icons">label</i>
            <div>
              <h3>Does PolyTherm charge me?</h3>
              <p>
                PolyTherm is free of charge.
              </p>
            </div>
          </div>
          <div class="__faq">
            <i class="material-icons">label</i>
            <div>
              <h3>Do I need a business plan to get a loan?</h3>
              <p>
                You may not need the typical business plan. The more important metric when it comes to business
                finance is your business history. Most of the companies who will offer you finance will require a 6-
                month track record of your business incomes and expenses.
              </p>
            </div>
          </div>
          <div class="__faq">
            <i class="material-icons">label</i>
            <div>
              <h3>Do I need collateral?</h3>
              <p>
                Yes, you may need to provide collateral.
              </p>
            </div>
          </div>
          <div class="__faq">
            <i class="material-icons">label</i>
            <div>
              <h3>What is collateral?</h3>
              <p>
                Collateral is used for secured lending. It is simply another asset you have which is equal in value to
                the loan size you are asking for. A company that offers you business finance may ask for collateral.
                This will be necessary for them in the event that you are unable to repay your loan amount. It is at
                this point that they will be allowed to sell that collateral asset in exchange for the outstanding loan
                amount.
              </p>
            </div>
          </div>
          <div class="__faq">
            <i class="material-icons">label</i>
            <div>
              <h3>How do I apply for a business loan?</h3>
              <p>
                <ol>
                  <li>
                    Complete the basic information form
                  </li>
                  <li>
                     We will present you with information on various companies who meet your requirements
                  </li>
                  <li>
                    You select the company
                  </li>
                  <li>
                    They get directly in touch with you
                  </li>
                  <li>
                    You've got your new business loan!
                  </li>
                </ol>
              </p>
            </div>
          </div>
          <div class="__faq">
            <i class="material-icons">label</i>
            <div>
              <h3>How do I know what business finance I need?</h3>
              <p>
                This is an important question to ask before you apply for business finance. It will be dependent on a
                couple of variables and our information gathering process allows us to untangle these variables.
                Complete the following forms (link) and we will see what options are best for you.
              </p>
            </div>
          </div>
          <div class="__faq">
            <i class="material-icons">label</i>
            <div>
              <h3>What business finance categories can I compare on SmartBusiness Loans?</h3>
              <p>
                You will be able to compare options between, merchant cash advance, invoice discounting,
                unsecured loans, secured loans, asset finance, online payment gateways, all business related bank
                accounts.
              </p>
            </div>
          </div>
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
  head(){
    return {
      title: 'FAQs'
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
    console.log("FAQ Mounted");
    window.scroll({
      top: 500,
      left: 0,
      behavior: "smooth"
    });

  },
  components: {
    'apply-section' : section
  }
};
</script>

<style>

</style>
