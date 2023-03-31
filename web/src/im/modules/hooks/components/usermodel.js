const { types } = mobxStateTree

const User = types.model({
  name: types.optional(types.string, "")
})


export default User