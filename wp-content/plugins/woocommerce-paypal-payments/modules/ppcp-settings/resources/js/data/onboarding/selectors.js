const EMPTY_OBJ = Object.freeze( {} );

const getOnboardingState = ( state ) => {
	if ( ! state ) {
		return EMPTY_OBJ;
	}

	return state.onboarding || EMPTY_OBJ;
};

export const getPersistentData = ( state ) => {
	return getOnboardingState( state ).data || EMPTY_OBJ;
};

export const getTransientData = ( state ) => {
	const { data, flags, ...transientState } = getOnboardingState( state );
	return transientState || EMPTY_OBJ;
};

export const getFlags = ( state ) => {
	return getOnboardingState( state ).flags || EMPTY_OBJ;
};
