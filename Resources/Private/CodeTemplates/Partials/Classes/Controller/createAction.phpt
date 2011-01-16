{namespace k=Tx_ExtbaseKickstarter_ViewHelpers}
	/**
	 * Creates a new {domainObject.name} and forwards to the list action.
	 *
	 * @param {domainObject.className} $new{domainObject.name} a fresh {domainObject.name} object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction({domainObject.className} $new{domainObject.name}) {
		$this->{domainObject.name -> k:lowercaseFirst()}Repository->add($new{domainObject.name});
		$this->flashMessageContainer->add('Your new {domainObject.name} was created.');
		$this->redirect('list');
	}