<template>
<div class="flex flex-col-reverse">
  <div class="-mt-4 mx-2 p-6 shadow bg-grey-300 rounded-lg">
    <button>Show controls</button>
    <div>
      <p>Draw empty x,y axes</p>
      <p>Draw rectangle for 1 month</p>
      <p>Animate rectangle to extend to 12 months -- Represents MRR to ARR</p>
      <button @click="pulseAll">Start animation</button>
    </div>
    
  </div>
  <div class="p-6 w-full h-64 bg-blue-grey-900 shadow-lg rounded-lg">

    <div v-for="row in y" class="flex">
      <div ref="units" v-for="col in x" class="flex flex-col m-1">
        <div class="h-10 w-10 rounded bg-teal-vivid-500">
          {{ row }}
          {{ col }}
        </div>
      </div>
    </div>

    

    
  </div>

</div>

</template>

<script>
import { TimelineLite, Back, Elastic, Expo } from 'gsap'

export default {

  data() {
    return {
      timeline: null,
      x: 3,
      y: 2
    }
  },

  methods: {
    pulse: function (el) {
      this.timeline.to(
        el, 
        2, 
        { 
          scale: 1.3, 
          ease: Expo.easeOut, 
        }
      )

      this.timeline.to(
        el, 
        2, 
        {
          scale: 1,
          ease: Expo.easeOut,
        }
      ) 
    },

    pulseAll: function() {
      let { units } = this.$refs
      let unit

      for (unit of units) {
        this.pulse(unit)
      }
    }
  },

  mounted() {
    let { units } = this.$refs
    let unit

    this.timeline = new TimelineLite({
      // onComplete: () => this.timeline.restart()
    })

    // for (unit of units) {
    //   this.pulse(unit)
    // }

    

  },
};
</script>