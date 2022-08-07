import streamlit as st
import numpy as np
import pandas as pd
import time
import altair as alt
from vega_datasets import data

source = data.seattle_weather()
st.title('EV Data Dashboard')

with st.container():
  col1, col2, col3 = st.columns(3)
  #data = np.random.randn(10, 1)

  #col1.subheader("A wide column with a chart")
  #col1.line_chart(data)

  #col2.subheader("A narrow column with the data")
  #col2.write(data)
  col1.metric("Battery Max Temperature", "31 °C", "1.2 °C")
  col2.metric("Battery Min Temperature", "30 °C", "-2 °C")
  col3.metric("Power Consumed in last 30 days", "401 kWh", "-2 kWh")

with st.sidebar:
    with st.expander("Analysis Period"):
      option = st.selectbox(
      'What is the analysis period',
      ('Daily', 'Monthly', 'Yearly','Custom'))

      if option == "Custom":
        dstart = st.date_input("From")
        dend = st.date_input("To")


 

with st.container():
  #st.subheader("Battery System") TODO: Find a better name for this and layout
  base = alt.Chart(data=source).encode(
      alt.X('month(date):T', axis=alt.Axis(title=None))
  )

  area = base.mark_area(opacity=0.3, color='#57A44C').encode(
      alt.Y('average(temp_max)',
            axis=alt.Axis(title='Avg. Battery Pack Temperature (°C)', titleColor='#57A44C')),
      alt.Y2('average(temp_min)')
  )

  line = base.mark_line(stroke='#5276A7', interpolate='monotone').encode(
      alt.Y('average(precipitation)',
            axis=alt.Axis(title='SOC(%)', titleColor='#5276A7'))
  )

  st.altair_chart(alt.layer(area, line).resolve_scale(
      y = 'independent'),use_container_width=True)

 