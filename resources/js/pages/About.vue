<template>
<transition
    appear
    @before-enter='beforeEnter'
    @enter='enter'
    >
    <div class=" container header mt-5">
    <h2 class="title p-2">{{title}}</h2>
  </div>
</transition>

  <transition
             appear
            @before-enter='before'
            @enter='entering'
            >
  <div class="container about-page mt-3">
    <p> Hello, my name is Luqman, and I enjoy creating thing that lives on the cloud. My interest in web started back in 2019
    during the lockdown, when I surfed the internet on ways to earn remotely. Coming across
    this opportunity of web development - using W3school and also taking online courses taught me alot about HTML & CSS!
    fast-forward to today, I've had the opportunity of creating some personal projects which has increased my knowledge of 
    coding from front-end languages to back-end languages, frameworks and APIs.
    Even though I haven't really have the opportunity to work on any major project or work for any company.
    My main focus is building accessible, inclusive and user-friendly webpages for a variety of clients.
    </p>
  </div>
  </transition>

  <transition
             appear
            @before-enter='before_entering'
            @enter='enterto'
            >
  <div>
    <div class="container skills mt-3 p-1 ">
    <h3> skills </h3>
    </div>
</div>
  </transition>
    <div class="container skill">
        <div class="row">

             <transition
             appear
            @before-enter='before_stacks'
            @enter='entertoStacks'
            >

         <div class="col">
            <div>
                <h5 class="tech-stack mt-2 p-3">
                    Here are few technologies I have been working with recently:
                </h5>
                <div class="row">
                    <div class="col-lg-3">
                         <ul style="list-style-type:none;">
                            <li><span>▹</span>vue3</li>
                            <li><span>▹</span>laravel</li>
                            <li><span>▹</span>php</li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                         <ul style="list-style-type:none;">
                             <li><span>▹</span>OOP</li>
                            <li><span>▹</span>mySQL</li>
                            <li><span>▹</span>javaScript</li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <ul style="list-style-type:none;">
                             <li><span>▹</span>node</li>
                            <li><span>▹</span>firebase</li>
                            <li><span>▹</span>sass</li>
                        </ul>
                    </div>  
                </div>
            </div>
         </div>
           </transition>
           
             <transition
             appear
            @before-enter='before_bars'
            @enter='entertoBars'
            >
            <div class="col-lg-6 col-sm-12">   

                
                <div class="bars">
 			    	<div class="info">
 				    	<span>Vue</span>
 					    <span>90%</span>
 				    </div>
                   
     				<div class="progress"  style="height: 5px;">
                <div class="progress-bar vue bg-info progress-bar-striped progress-bar-animated" 
                role="progressbar" aria-valuenow="90" aria-valuemin="0"
                aria-valuemax="100" style="width: 90%;"></div>
                </div>   
                   
 			    </div>
                
              
 			<div class="bars">
 				<div class="info">
 					<span>CSS</span>
 					<span>80%</span>
 				</div>
                   
                <div class="progress"  style="height: 5px;">
                    <div class="progress-bar css bg-info progress-bar-striped progress-bar-animated" 
                    role="progressbar" aria-valuenow="80" aria-valuemin="0"
                    aria-valuemax="100" style="width: 80%;">
                    </div>
                </div>   
                
 			</div>
                 
         
 			<div class="bars">
 				<div class="info">
 					<span>JavaScript</span>
 					<span>75%</span>
 				</div>
 				<div class="progress"  style="height: 5px;">
                <div class="progress-bar javaScript bg-info progress-bar-striped progress-bar-animated" 
                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                aria-valuemax="100" style="width: 75%; "></div>
                </div>   
            
 			</div>
                  
                   
 			<div class="bars">
                <div class="info">
 					<span>PHP(Laravel)</span>
 					<span>85%</span>
 				</div>
            
 				<div class="progress"  style="height: 5px;">
                <div class="progress-bar php bg-info progress-bar-striped progress-bar-animated" 
                role="progressbar" aria-valuenow="85" aria-valuemin="0"
                aria-valuemax="100" style="width: 85%; "></div>
                </div>   
            
 			</div>
                   
                    
 			<div class="bars">
 				<div class="info">
 					<span>mySQL</span>
 					<span>70%</span>
 				</div>
            
 				<div class="progress"  style="height: 5px;">
                <div class="progress-bar mySQL bg-info progress-bar-striped progress-bar-animated" 
                role="progressbar" aria-valuenow="70" aria-valuemin="0"
                aria-valuemax="100" style="width: 70%;"></div>
                </div>   
 		    </div>
                
            </div>   
             </transition>
        </div>
    </div>

  <section class=" p-4 rounded-3 " style="min-height: 100%">
    <slot />
</section>
  
</template> 

<script>
import gsap from 'gsap'
import layout from '../layout.vue'
export default({
    layout:layout,
    data() {

        const beforeEnter = (el,) =>{
            el.style.transform = 'translatey(-50px)'
            el.style.opacity = 0
        }
        const enter = (el,done) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 2,    
                delay:2,
                ease:'ease.in',
                onComplete:done
            })
        }
        const before = (el,) =>{
            el.style.transform = 'translatey(-50px)'
            el.style.opacity = 0
        }
        const entering = (el,done) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 2,    
                delay:2,
                ease:'bounce',
                onComplete:done
            })
        }
        const before_entering = (el,) =>{
            el.style.transform = 'translatey(100px)'
            el.style.opacity = 0
        }
        const enterto = (el,done) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 2,    
                delay:2,
                ease:'slowMo',
                onComplete:done
            })
        }
         const before_stacks = (el,) =>{
            el.style.transform = 'translatey(-100)'
            el.style.opacity = 0
        }
        const entertoStacks = (el,done) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 4,    
                delay:2,
                ease:'elastic.inOut( 1, 0.3)',
                onComplete:done
            })
        }
          const before_bars = (el,) =>{
            el.style.transform = 'translatey(-100)'
            el.style.opacity = 0
        }
        const entertoBars = (el,done) =>{
            gsap.to(el, {
                y:0,
                opacity:1,
                duration: 4,    
                delay:2,
                ease:'bounce',
                onComplete:done
            })
        }

        return{
            title: 'About me',
            beforeEnter,
            enter,
            entering,
            before,
            before_entering,
            enterto,
            before_stacks,
            entertoStacks,
            before_bars,
            entertoBars
        }
    }
})
</script>

<style scoped>
    .javaScript{
        animation: loading 6s forwards cubic-bezier(0,0,0,0);
    }
    @keyframes loading {
        0%{
            width:0%;
        }
        75%{
            width: 75%;
        }
    }
     .php{
        animation: loading 6s forwards cubic-bezier(0,0,0,0);
    }
    @keyframes loading {
        0%{
            width:0%;
        }
        85%{
            width: 85%;
        }
    }
     .mySQL{
        animation: loading 6s forwards cubic-bezier(0,0,0,0);
    }
    @keyframes loading {
        0%{
            width:0%;
        }
        70%{
            width: 70%;
        }
    }
     .vue{
        animation: loading 6s forwards cubic-bezier(0,0,0,0);
    }
    @keyframes loading {
        0%{
            width:0%;
        }
        90%{
            width: 90%;
        }
    }

    .css{
        animation: loading 6s forwards cubic-bezier(0,0,0,0);
    }
    @keyframes loading {
        0%{
            width:0%;
        }
        80%{
            width: 80%;
        }
    }
    
    h2{
        color: #ccd6f6;
        font-weight: 600;
        line-height: 1.1; 
        position: relative;
        max-width:6.5em;
        min-height: 0em;
        width: 100%;
        text-align: center;
        
    }
   
    h2::before{
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border-bottom: 5px solid #64ffda;
        border-left: 5px solid #64ffda;
        bottom:0;
        left: 0;
    }
     h2::after{
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border-top: 5px solid #64ffda;
        border-right: 5px solid #64ffda;
        top: 0;
        right:0;
        align-self: auto;
    }
    .about-page p{
        font-size: 17px;
        color: #ccd6f6;
        line-height: 2em;
        text-align: justify;
    }
    .row{
    color: #ccd6f6 !important;
    }
.meter{
   margin: 0 auto;
}

.bars{
    margin-bottom: auto 0;
    text-transform: capitalize;
    
}
.info{
    display: flex;
    align-items: center;
    justify-content: space-between;
     font-size: large;
  font-weight: 600;
  font-family: 'Courier New', Courier, monospace;
  color:#ccd6f6;;
}

div .skills{
    color: #ccd6f6;
    text-align: center;
    margin-bottom: 15px;
    position: relative;
    max-width: 8em;
}
div .skills ::before{
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border-bottom: 5px solid #64ffda;
        border-left: 5px solid #64ffda;
        bottom: 0;
        left: 0;
    }
    div .skills::after{
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border-top: 5px solid #64ffda;
        border-right: 5px solid #64ffda;
        top:0;
        right:0;
    }   
    h4 .tech-stack{
        color: #ccd6f6;
        text-align: left;
        /* line-height: 1.5em; */
    }
    ul li span{
        color: #64ffda;
    }
    ul li{
        line-height: 1.5em;
    }
</style>



