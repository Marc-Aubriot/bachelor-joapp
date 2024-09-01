import{Z as r,B as a,o as n,c,k as i,a as e,t as s,F as l}from"./app-CjOUruHE.js";import{_ as d}from"./st-quentin-Bu5DuEiD.js";import{_ as u}from"./_plugin-vue_export-helper-DlAUqK2U.js";const _={name:"Error",components:{Head:r},props:{status:Number},computed:{title(){return{503:"503: Service Unavailable",500:"500: Server Error",404:"404: Page Not Found",403:"403: Forbidden"}[this.status]},description(){return{503:"Sorry, we are doing some maintenance. Please check back soon.",500:"Whoops, something went wrong on our servers.",404:"Sorry, the page you are looking for could not be found.",403:"Sorry, you are forbidden from accessing this page."}[this.status]}}},m={class:"h-fit w-full"},p={class:"h-screen relative"},f=e("img",{src:d,alt:"Drapeau des jeux olympiques de Paris 2024",class:"object-cover h-full w-full"},null,-1),h={class:"absolute top-1/3 w-full flex justify-center"},g={class:"w-3/4 md:w-2/6 p-10 rounded-xl flex flex-col items-center gap-6 bg-white"},b={class:"text-xl font-bold"},v={class:"w-full"},w=e("a",{class:"bg-amber-200 p-4 rounded-sm hover:bg-amber-400 transition ease-in-out duration-300",href:"/"}," Retour à l'accueil ",-1);function x(y,k,S,E,B,o){const t=a("Head");return n(),c(l,null,[i(t,{title:"Error"}),e("div",m,[e("div",p,[f,e("main",h,[e("div",g,[e("h1",b,s(o.title),1),e("p",v,s(o.description),1),w])])])])],64)}const H=u(_,[["render",x]]);export{H as default};
