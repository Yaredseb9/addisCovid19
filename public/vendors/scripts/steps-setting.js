$(".tab-wizard").steps({
	headerTag: "h5",
	bodyTag: "section",
	transitionEffect: "fade",
	titleTemplate: '<span class="step">#index#</span> #title#',
	labels: {
		finish: "Print"
	},
	onStepChanged: function (event, currentIndex, priorIndex) {
		$('.steps .current').prevAll().addClass('disabled');
		calrisk();
	},
	onFinished: function (event, currentIndex) {
		/*$('#success-modal').modal('show');*/
		//alert("print1");
		//$("#print_me").print();
		//window.print();

	var DocumentContainer = document.getElementById('print_me');
    var WindowObject = window.open('', "PrintWindow", "width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    WindowObject.document.writeln(DocumentContainer.innerHTML);
    WindowObject.document.close();
    WindowObject.focus();
    WindowObject.print();
    WindowObject.close();

		

	}
});

$(".tab-wizard2").steps({
	headerTag: "h5",
	bodyTag: "section",
	transitionEffect: "fade",
	titleTemplate: '<span class="step">#index#</span> <span class="info">#title#</span>',
	labels: {
		finish: "Print",
		next: "Next",
		previous: "Previous",
	},
	onStepChanged: function(event, currentIndex, priorIndex) {
		$('.steps .current').prevAll().addClass('disabled');
		if(currentIndex == 5){
			calculate_ri();
		}
	},
	onFinished: function(event, currentIndex) {
		$('#success-modal-btn').trigger('click');
		 //alert("Print");
	var DocumentContainer = document.getElementById('print_me');
    var WindowObject = window.open('', "PrintWindow", "width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    WindowObject.document.writeln(DocumentContainer.innerHTML);
    WindowObject.document.close();
    WindowObject.focus();
    WindowObject.print();
    WindowObject.close();
	}
});