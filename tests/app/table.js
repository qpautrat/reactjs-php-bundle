var Table = React.createClass({
  render: function () {
    return (
      React.DOM.table(null, React.DOM.tbody(null,
        this.props.data.map(function (row) {
          return (
            React.DOM.tr(null,
              row.map(function (cell) {
                return React.DOM.td(null, cell);
              })));
        }))
      )
    );
  }
});