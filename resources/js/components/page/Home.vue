<template>
  <div>
    <main>
      <div class="container">
        <article class="col-md-8 col-xs-12">
          <section class="home-quiz__setting">
            <h2 class="home-quiz__setting-h2">
              <img class="home-quiz__setting-h2-logo" src="/images/directory-icon.png" />出題設定
            </h2>
            <form>
              <label v-for="(cate, index) in category" :key="index">
                <input type="checkbox" v-model="categories" :value="cate.id" />{{cate.name}}&ensp;
              </label>
              <div >
                全項目チェック
                <button type="button" name="check_all" id="check-all" value="1">ON</button>
                <button type="button" name="check_all_off" id="check-all-off" value="1">OFF</button>
              </div>
              <button type="submit" class="btn btn-primary" @click.stop.prevent="goQuiz()">出題開始</button>
            </form>
          </section>
        </article>
      </div>
    </main>
  </div>
</template>

<script>
import TheSidebar from "../layout/TheSidebar";
import BarChart from "../module/BarChart";

export default {
  components: {
    TheSidebar,
    BarChart
  },
  data() {
    return {
      categories: [1],
      information: [],
      category: [],
    };
  },
  mounted() {
    this.$http.get("/api/category").then(response => {
      this.category = response.data;
    });
    this.$http.get("/api/information").then(response => {
      this.information = response.data;
    });
  },
  methods: {
    goQuiz() {
      this.$router.push("/quiz?categories=" + this.categories);
    }
  }
};
</script>