// JavaScript Document
var Book_Image_Width = 400; // el ancho de las imágenes a utilizar
  var Book_Image_Height = 267; // el alto de las imágenes a utilizar
  var Book_Border = true; // si las imágenes tienen borde, ponemos true
  var Book_Border_Color = "#CCC";  // es el color del borde
  var Book_Speed = 15;  // la velocidad del efecto
  var Book_NextPage_Delay = 1500; // 1 segundo=1000
  var Book_Vertical_Turn = 1;  // si queremos que sea vertical, colocamos el valor de 1

  // esta es la lista de las imágenes a ser mostradas (mínimo cuatro)

  Book_Image_Sources=new Array(
    // si no se quiere agregar un enlace, se deja en blanco ""
    "http://i47.tinypic.com/9hncbm.jpg","",
    "http://i50.tinypic.com/i43dit.jpg","",
    "http://i49.tinypic.com/2drs27t.jpg","",
	"http://i48.tinypic.com/idacgl.jpg","",
	"http://i49.tinypic.com/33peof5.jpg","",
    "http://i47.tinypic.com/flzdy8.jpg",""
    // la última imagen no debe terminar con una coma
  );

  var B_CrImg=Book_Image_Sources.length/2;
  var B_LI, B_MI, B_RI, B_TI;
  var B_Angle=0;
  var B_MaxW;
  var B_Direction=1;
  var B_MSz;
  var B_Stppd=false;
  B_Pre_Img=new Array(Book_Image_Sources.length);

  function ImageBook() {
    if(document.getElementById) {
      for(i=0;i<Book_Image_Sources.length;i+=2){
        B_Pre_Img[i]=new Image();
        B_Pre_Img[i].src=Book_Image_Sources[i];
      }

      Book_Div=document.getElementById("Book");
      B_LI=document.createElement("img");Book_Div.appendChild(B_LI); 
      B_RI=document.createElement("img");Book_Div.appendChild(B_RI);
      B_MI=document.createElement("img");Book_Div.appendChild(B_MI);
      B_LI.style.position=B_MI.style.position=B_RI.style.position="absolute";
      B_LI.style.zIndex=B_RI.style.zIndex=0;B_MI.style.zIndex=1;
      B_LI.style.top=(Book_Vertical_Turn?Book_Image_Height+1:0)+"px";
      B_LI.style.left=0+"px";
      B_MI.style.top=0+"px";
      B_MI.style.left=(Book_Vertical_Turn?0:Book_Image_Width+1)+"px";
      B_RI.style.top=0+"px";
      B_RI.style.left=(Book_Vertical_Turn?0:Book_Image_Width+1)+"px";
      B_LI.style.height=Book_Image_Height+"px";	  
      B_MI.style.height=Book_Image_Height+"px";
      B_RI.style.height=Book_Image_Height+"px";
      B_LI.style.width=Book_Image_Width+"px";
      B_MI.style.width=Book_Image_Width+"px";
      B_RI.style.width=Book_Image_Width+"px";

      if(Book_Border) {
        B_LI.style.borderStyle=B_MI.style.borderStyle=B_RI.style.borderStyle="solid";
        B_LI.style.borderWidth=1+"px";
        B_MI.style.borderWidth=1+"px";
        B_RI.style.borderWidth=1+"px";
        B_LI.style.borderColor=B_MI.style.borderColor=B_RI.style.borderColor=Book_Border_Color;
      }

      B_LI.src=B_Pre_Img[0].src;
      B_LI.lnk=Book_Image_Sources[1];
      B_MI.src=B_Pre_Img[2].src;
      B_MI.lnk=Book_Image_Sources[3];
      B_RI.src=B_Pre_Img[4].src;
      B_RI.lnk=Book_Image_Sources[5];
      B_LI.onclick=B_MI.onclick=B_RI.onclick=B_LdLnk;
      B_LI.onmouseover=B_MI.onmouseover=B_RI.onmouseover=B_Stp;
      B_LI.onmouseout=B_MI.onmouseout=B_RI.onmouseout=B_Rstrt;
      BookImages();
    }
  }

  function BookImages(){
    if(!B_Stppd) {
      if(Book_Vertical_Turn) {
        B_MSz=Math.abs(Math.round(Math.cos(B_Angle)*Book_Image_Height));
        MidOffset=!B_Direction?Book_Image_Height+1:Book_Image_Height-B_MSz;
        B_MI.style.top=MidOffset+"px";
		B_MI.style.height=B_MSz+"px"
      } else {
        B_MSz=Math.abs(Math.round(Math.cos(B_Angle)*Book_Image_Width));
        MidOffset=B_Direction?Book_Image_Width+1:Book_Image_Width-B_MSz;
        B_MI.style.left=MidOffset+"px";
        B_MI.style.width=B_MSz+"px"}
        B_Angle+=Book_Speed/720*Math.PI;
        if(B_Angle>=Math.PI/2&&B_Direction) {
          B_Direction=0;
          if(B_CrImg==Book_Image_Sources.length)B_CrImg=0;
          B_MI.src=B_Pre_Img[B_CrImg].src;
          B_MI.lnk=Book_Image_Sources[B_CrImg+1];
          B_CrImg+=2
        }
        if(B_Angle>=Math.PI) {
          B_Direction=1;
          B_TI=B_LI;

          B_LI=B_MI;
          B_MI=B_TI;
          if(Book_Vertical_Turn)B_MI.style.top=0+"px";
          else B_MI.style.left=Book_Image_Width+1+"px";             
		  B_MI.src=B_RI.src;
          B_MI.lnk=B_RI.lnk;
          setTimeout("Book_Next_Delay()",Book_NextPage_Delay);
      } else setTimeout("BookImages()",50);
    } else setTimeout("BookImages()",50);
  }

  function Book_Next_Delay() {
    if(B_CrImg==Book_Image_Sources.length)B_CrImg=0;
    B_RI.src=B_Pre_Img[B_CrImg].src;
    B_RI.lnk=Book_Image_Sources[B_CrImg+1];
    B_MI.style.zIndex=2;
    B_LI.style.zIndex=1;
    B_Angle=0;
    B_CrImg+=2;
    setTimeout("BookImages()",50);
  }

  function B_LdLnk() {
    if(this.lnk)window.location.href=this.lnk;
  }

  function B_Stp() {
    B_Stppd=true;this.style.cursor=this.lnk?"pointer":"default";
  }

  function B_Rstrt() {
    B_Stppd=false;
  }