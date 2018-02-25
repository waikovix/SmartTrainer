<template>
    <div>
      <md-card>
        <md-card-header>
          <div class="md-title"><h1>Calories</h1></div>
          2160/3060
        </md-card-header>

        <md-card-content>

          <br>
          <div>
            <progress-bar value = 'amount' valueof="100" id="myBar-green" element="Proteins"></progress-bar>
            <br>
            <progress-bar value = "amount" valueof="100" id="myBar-red" element="Fat"></progress-bar>
            <br>
            <progress-bar value = "amount" valueof="100" id="myBar-blue" element="Carbs"></progress-bar>
          </div>

        </md-card-content>


      </md-card>
      <br>
      <md-card>
        <md-card-header>
          <div class="md-title">Last weight</div>
        </md-card-header>

        <md-card-content>
          <h1>74.4kg</h1>
        </md-card-content>
      </md-card>
      <h1>Latest news</h1>
      <hr>
      <blog></blog>

    </div>
</template>

<script>
    export default {
      name: 'home',
      amount: 10
    }
</script>

<style scoped>

</style>
