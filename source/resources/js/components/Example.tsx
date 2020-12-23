import React from 'react';
import ReactDOM from 'react-dom';
import { makeStyles, createStyles } from '@material-ui/core/styles';
import Button from '@material-ui/core/Button';

const useStyles = makeStyles(() => (
    createStyles({
        "button": {
            backgroundColor: "#111",
            color: "#FFF",
            "&:hover": {
                color: "#111"
            }
        }
    })
));

const Example = () => {
    const classes = useStyles();

    return (
        <Button className={classes.button} variant="outlined">
            Example
        </Button>
    )
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
