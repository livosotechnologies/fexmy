(function(){var e={series:[14,23,21,17,15,10,12,17,21],chart:{type:"polarArea",height:300},stroke:{colors:["#fff"]},fill:{opacity:.8},legend:{position:"bottom"},colors:["#546dfe","#d77cf7","#f4a742","#0ca3e7","#fe5454","#0cd7b1","#fe7c58","#0ca3e7","#7b76fe"],responsive:[{breakpoint:480,options:{chart:{width:200},legend:{position:"bottom"}}}]},o=new ApexCharts(document.querySelector("#polararea-basic"),e);o.render();var e={series:[42,47,52,58,65],chart:{height:300,type:"polarArea"},labels:["Rose A","Rose B","Rose C","Rose D","Rose E"],fill:{opacity:1},stroke:{width:1,colors:void 0},yaxis:{show:!1},legend:{position:"bottom"},plotOptions:{polarArea:{rings:{strokeWidth:0},spokes:{strokeWidth:0}}},theme:{monochrome:{enabled:!0,shadeTo:"light",shadeIntensity:.6,color:"#546dfe"}}},o=new ApexCharts(document.querySelector("#polararea-monochrome"),e);o.render()})();
