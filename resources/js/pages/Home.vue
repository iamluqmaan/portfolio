<template>
<layout />
 
      
    <div class="container">
        
        <div>
        <transition
             appear
            @before-enter='beforeEnter'
            @enter='enter'
            >
            <div  class="intro mt-4"><p>Hi, my name is</p></div>
        </transition>  

         <transition
             appear
            @before-enter='before'
            @enter='enterTo'
            >
        <section>
            <div class="big-name">
                <h1>Obalola Luqman</h1>
            </div>
           
            <div  class="dev"> <p>Fullstack developer.</p></div>
                <div class="experience"><p class="typing">High level experience in Front and backend development,
                    <br>producing quality work.
                </p>
                </div>
                <a :class="{'selected': $page.component=='About'}" href="/about">
                 <button class="btn-hire"><i class="far fa-user"></i> More About Me </button> </a>
        </section> 
        </transition>
        </div>
    </div> 
    <section class=" rounded-3 p-4" style="min-height: 100px">
    <slot />
</section>
</template> 
<script>
import { Link } from '@inertiajs/inertia-vue3'
import layout from '../layout.vue'
import typed from './typed.vue'
import gsap from 'gsap'

export default({
    layout: layout,
    typed: typed,
    data() {
        const beforeEnter = (el) =>{
            el.style.transform = 'translatey(-60px)'
            el.style.opacity = 0
        }
        const enter = (el, done) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 1,
                delay: 2,
                ease: 'bounce.out',
                onComplete:done
            })
        }
        const before = (el) =>{
            el.style.transform = 'translateY(60px)'
            el.style.opacity = 0
        }
        const enterTo = (el, done) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 1,
                delay: 2,
                ease: 'bounce.out',
                onComplete:done
            })
        }
        return {Link,beforeEnter, enter, enterTo,before}
    }
})

</script>
<style scoped>
    .container{
        text-align: left;
        max-width: 60rem;
        /* display: block; */
        padding: 0 2em;
        margin: 0 auto;

    }
    
    .intro p{
        color: #64ffda;
        line-height: 1.3rem;
        text-align: left;
        font-size: 17px;
        word-spacing: 1.1;
        margin: 15px;
        max-width: 60em;
        display: block;
        font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
        transition: 15s;
        /* transform-origin: left;
        transform: scaleX(1); */
    }
   
    .big-name h1{
        font-weight: 600;
        color: #ccd6f6;
        font-size: clamp(40px, 8vw, 80px);
        margin: 0;
        line-height: 1.1;
        display: grid;
        text-align: left;
        max-width: 60rem;
    }
    div .dev{
        font-weight: 600;
        color: #a8b2d1;
        font-size: clamp(40px, 8vw, 80px);
        margin: 0;
        line-height: 1.1;
        display: grid;
        place-items: left;
        max-width: 50rem;
    }
     div .experience{
        font-weight: normal;
        color: #a8b2d1;
        font-size: 18px;
        margin: 0;
        display: block;
        line-height: 1.3em;
        max-width: 50rem;
        
    }
    img{
        width: 100%;
        height: 60vh;
        opacity: .2;
    }
    div .row{
        margin-top: 13vh;
    }
    p #dev{
        font-weight: 500;
        line-height: 1.2em;

    }
    p #experience{
        line-height: 1.2em;
    }
    button{
        background:none;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 13px;
        padding-bottom: 13px;
        color: #64ffda;
        border: 1px solid #64ffda;
        border-radius: 5px;
        margin-top: 20px;
        line-height: 1.3em;
        font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
        margin-bottom: 10px;
        text-align: center;
        
    }
    div .socials i{
        color: #fff;
        border: 1px solid red;
        font-size: 20px;
        padding: 10px;
        border-radius: 5px;
        margin-right: 15px; 
    }
   
</style>


