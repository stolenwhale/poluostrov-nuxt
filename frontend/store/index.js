export const state = () => ({
  locations: null
});

export const getters = {
  getLocations: state => {
    return state.locations
  }
}

export const mutations = {
  setLocations(state, payload) {
    state.locations = payload;
  }
}

export const actions = {
  setLocations({ commit }, payload) {
    commit("setLocations", payload);
  }
};
