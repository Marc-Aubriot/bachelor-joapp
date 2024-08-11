import{o as r,e as l,F as g,h as f,n as p,a as e,f as w,Z as I,q as d,b as h,t as m}from"./app-CtreDRx0.js";import{_ as P,F as L}from"./Footer-BGeCkFn3.js";import{g as v}from"./utilities-BmSGbLXn.js";import{_ as x}from"./_plugin-vue_export-helper-DlAUqK2U.js";import"./ResponsiveNavLink-93DLAsYn.js";const N="/build/assets/arrow-left-2-BwzSEJnI.svg",k="/build/assets/arrow-right-2-BQ1A7F55.svg",F="/build/assets/circle-BFF_TihM.svg",S={name:"Carousel",props:{imgNameList:{type:Array,default:null}},data(){return{currentIndex:2}},methods:{getImgPath:v,previousImg(){this.currentIndex>0&&this.currentIndex--},nextImg(){this.currentIndex<this.imgNameList.length-1&&this.currentIndex++},loadImgByIndex(a){this.currentIndex=a}}},B={key:0,class:"relative h-full w-full overflow-hidden"},A=["src"],j={class:"absolute bottom-14 left-1/3 flex gap-5 w-1/3 justify-center"},H=["onClick"],T={key:1,class:"h-full"},M=e("p",null,"Nothing to show yet",-1),q=[M];function V(a,s,i,y,o,t){return i.imgNameList?(r(),l("div",B,[(r(!0),l(g,null,f(i.imgNameList,(c,u)=>(r(),l("img",{src:t.getImgPath(c.name),alt:"photo de Bercy",class:p(o.currentIndex==u?"absolute top-0 object-cover h-full w-full duration-700 ease-in-out":o.currentIndex<u?"absolute top-0 object-cover h-full w-full  duration-700 ease-in-out translate-x-full":"absolute top-0 object-cover h-full w-full  duration-700 ease-in-out -translate-x-full")},null,10,A))),256)),e("div",null,[o.currentIndex>0?(r(),l("img",{key:0,src:N,alt:"flèche gauche",class:"absolute top-1/2 left-10 hover:-translate-y-1 hover:scale-110 duration-50 transition ease-in-out delay-50 cursor-pointer",onClick:s[0]||(s[0]=(...c)=>t.previousImg&&t.previousImg(...c))})):w("",!0)]),e("div",null,[o.currentIndex<4?(r(),l("img",{key:0,src:k,alt:"flèche droite",class:"absolute top-1/2 right-10 hover:-translate-y-1 hover:scale-110 duration-50 transition ease-in-out delay-50 cursor-pointer",onClick:s[1]||(s[1]=(...c)=>t.nextImg&&t.nextImg(...c))})):w("",!0)]),e("div",j,[(r(!0),l(g,null,f(i.imgNameList,(c,u)=>(r(),l("img",{src:F,alt:"icône de page ronde",class:p(o.currentIndex==u?"cursor-pointer scale-150":"hover:scale-150 duration-50 transition ease-in-out delay-50 cursor-pointer"),onClick:_=>t.loadImgByIndex(u)},null,10,H))),256))])])):(r(),l("div",T,q))}const z=x(S,[["render",V]]),D="/build/assets/little-arrow-left-lxQMHD4k.svg",E="/build/assets/little-arrow-right-CKmSFnM0.svg",Q={name:"Welcome",components:{Header:P,Footer:L,Carousel:z,Head:I},props:{canLogin:{type:Boolean},canRegister:{type:Boolean},articleList:{type:Array,required:!1},imgList:{typ:Array,required:!1}},data(){return{newsCurrentPage:0,articlesForThisPage:[],articleSubList:[],newsMaxPage:4}},mounted(){this.populateNewSection()},methods:{getImgPath:v,loadArticle(a){console.log("loading this article")},previousNewsPage(){this.newsCurrentPage>0&&(this.newsCurrentPage--,this.articlesForThisPage=this.articleSubList[this.newsCurrentPage])},nextNewsPage(){this.newsCurrentPage<this.articleSubList.length-1&&(this.newsCurrentPage++,this.articlesForThisPage=this.articleSubList[this.newsCurrentPage])},populateNewSection(){let a=0,s=[];for(let i=0;i<this.articleList.length;i++)s.push(this.articleList[i]),a++,a==3&&(a=0,this.articleSubList.push(s),s=[]);this.articlesForThisPage=this.articleSubList[this.newsCurrentPage]}}},W={class:"h-fit w-full"},J={class:"h-screen relative"},K={class:"h-fit w-full"},R={class:"flex justify-center w-screen py-16 overflow-hidden"},Z={class:"w-4/5 md:w-3/5 flex flex-col gap-8"},G=e("h2",{class:"text-4xl"},"Actualités de Paris 2024",-1),O={class:"border-t-black border-t py-8 flex flex-col md:flex-row md:justify-between w-full gap-10"},U={class:"flex flex-col w-full gap-6"},X=["src","alt","onClick"],Y=["onClick"],$={class:"flex justify-end w-full"},ee={class:"flex gap-2"};function te(a,s,i,y,o,t){const c=d("Head"),u=d("Header"),_=d("Carousel"),b=d("Footer");return r(),l(g,null,[h(c,{title:"Accueil"}),e("div",W,[e("div",J,[h(u),h(_,{imgNameList:i.imgList},null,8,["imgNameList"])]),e("main",K,[e("section",R,[e("div",Z,[G,e("div",O,[(r(!0),l(g,null,f(o.articlesForThisPage,(n,se)=>(r(),l("article",U,[e("img",{src:t.getImgPath(n.photo),alt:n.alt,class:"cursor-pointer hover:scale-110 rounded-md h-48 w-full",onClick:C=>t.loadArticle(n.id)},null,8,X),e("h5",{class:"cursor-pointer hover:underline hover:underline-offset-4 w-33",onClick:C=>t.loadArticle(n.id)},m(n.title),9,Y)]))),256))]),e("div",$,[e("div",ee,[e("img",{src:D,alt:"petite flèche à gauche",class:"cursor-pointer",onClick:s[0]||(s[0]=(...n)=>t.previousNewsPage&&t.previousNewsPage(...n))}),e("p",null,m(o.newsCurrentPage+1)+"/"+m(o.articleSubList.length),1),e("img",{src:E,alt:"petite flèche à droite",class:"cursor-pointer",onClick:s[1]||(s[1]=(...n)=>t.nextNewsPage&&t.nextNewsPage(...n))})])])])])]),h(b)])],64)}const ae=x(Q,[["render",te]]);export{ae as default};
