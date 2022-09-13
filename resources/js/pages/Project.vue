<template>
<transition
  appear
  @before-enter='beforeEnter'
  @enter='enter'
  >
  <h1>project</h1>
 </transition>
<section class=" p-4 rounded-3 shadow" style="min-height: 100px">
    <slot />


</section>
           

   <!-- <button @click="show = !show">toggle</button> -->

</template>

<script>
import layout from '../layout.vue'
import gsap from 'gsap'
export default {
    layout:layout,
    data() {
      const beforeEnter = (el) =>{
            el.style.transform = 'translatey(-60px)'
            el.style.opacity = 0
        }
        const enter = (el) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 1,
                ease: 'bounce.out'
            })
        }
        return {beforeEnter, enter}
    }
    
}
</script>

<style>
h1{
  color:antiquewhite;
  text-align: center;
}

 /* .fade-enter-from,
.fade-leave-to{
  opacity: 0;
}
.fade-enter-active,
.fade-leave-active{
  transition: opacity 0.5s ease-out;
} */
/* .fade-enter-from{
  opacity: .0;
}
.fade-enter-to{
 opacity: 1;
}
.fade-enter-active{
  transition: all 2s ease;
}
.fade-leave-from{
  opacity: 1;
}
.fade-leave-to{
  opacity: 0;
}
.fade-leave-active{
  transition: all 2s ease;
} */
</style>