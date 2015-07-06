Popup = function(dom){
	
	this.DOM = dom;
	this.appear = false;
}

Popup.prototype.setTriggerAppear = function(trigger, event){
	
	var that = this;
	
	trigger.addEventListener(event, function(e){
		
		if(that.appear === false){
			e.preventDefault();
			
			document.body.appendChild(that.DOM);
			that.appear = true;
			console.log(that.appear);
		}
		
	}, false);
	
}

Popup.prototype.setTriggerDisappear = function(trigger, event){
	
	var that = this;
	
		trigger.addEventListener(event, function(e){
			
			if(that.appear === true){
				e.preventDefault();
			
				document.body.removeChild(that.DOM);
				that.appear = false;
			}
			
		}, false);	

}