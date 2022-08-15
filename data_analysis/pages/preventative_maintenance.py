import streamlit as st
import numpy as np
import pandas as pd
import time
import altair as alt
from vega_datasets import data

st.header("Charging and Discharging Curves")

st.write("This page contains a visualization of the charging and discharging curves of the specimen\n"+
            "A mathematical model is used to fit the data, and its metrics and results are summarized.")