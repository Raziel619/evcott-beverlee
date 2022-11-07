import streamlit as st
import numpy as np
import pandas as pd
import time
import altair as alt
#import vega_datasets
import scipy 
import plotly.figure_factory as ff
import plotly.graph_objects as go
from plotly.subplots import make_subplots

source = pd.read_csv('evp.csv')
st.title('EV Data Dashboard')



with st.container():
  st.subheader("Cumulative Quantities Since Operation")
  col1, col2, col3,col4 = st.columns(4)
  #data = np.random.randn(10, 1)

  #col1.subheader("A wide column with a chart")
  #col1.line_chart(data)

  #col2.subheader("A narrow column with the data")
  #col2.write(data)
  col1.metric("Time/Days", "228")
  col2.metric("Charge Power/kWh", "9638.1")
  col3.metric("Charge Current/Ah", "26310.8")
  col4.metric("Discharge Current/Ah", "26288.9")

with st.container():
  st.subheader("Battery Status")
  col1, col2= st.columns(2)
  col1.metric("Battery SOC", "99%", "+37 %")
  col2.metric("Battery SOH", "100%")

  #col2.subheader("A narrow column with the data")
  #col2.write(data)

with st.container():
  st.subheader("Battery Performance")
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




############################################################################

#PLOTTING DUAL AXES IN PLOTLY 
with st.container():  

  # Create figure with secondary y-axis
  fig = make_subplots(specs=[[{"secondary_y": True}]])

  # Add traces
  fig.add_trace(
      go.Scatter(x=pd.to_datetime(source['time']), y=source['soc'], name="SOC(%)"),
      secondary_y=False,
  )

  fig.add_trace(
      go.Scatter(x=pd.to_datetime(source['time']), y=source['BatTmpMX'], name="Max. Battery Temperature"),
      secondary_y=True,
  )

  # Add figure title
  fig.update_layout(
      title_text="Battery Health"
  )

  # Set x-axis title
  fig.update_xaxes(title_text="Time")

  # Set y-axes titles
  fig.update_yaxes(title_text="SOC(%)", secondary_y=False)
  fig.update_yaxes(title_text="Max. Battery Temperature", secondary_y=True)
  st.plotly_chart(fig, use_container_width=True)


  #fig.show()


  with st.container():
  #To create multiple line charts on the same plot with plotly graph objects, all you have to do is add another trace to the plot.
    fig = go.Figure()
    fig.add_trace(go.Scatter(x=pd.to_datetime(source['time']), y=source["bmt1"], name="Moodule 1", mode="lines"))
    fig.add_trace(go.Scatter(x=pd.to_datetime(source['time']), y=source["bmt2"], name="Moodule 2", mode="lines"))
    fig.add_trace(go.Scatter(x=pd.to_datetime(source['time']), y=source["bmt3"], name="Moodule 3", mode="lines"))
    fig.add_trace(go.Scatter(x=pd.to_datetime(source['time']), y=source["bmt4"], name="Moodule 4", mode="lines"))
    fig.add_trace(go.Scatter(x=pd.to_datetime(source['time']), y=source["bmt5"], name="Moodule 5", mode="lines"))
    fig.add_trace(go.Scatter(x=pd.to_datetime(source['time']), y=source["bmt6"], name="Moodule 6", mode="lines"))
    fig.add_trace(go.Scatter(x=pd.to_datetime(source['time']), y=source["bmt7"], name="Moodule 7", mode="lines"))
    fig.add_trace(go.Scatter(x=pd.to_datetime(source['time']), y=source["bmt8"], name="Moodule 8", mode="lines"))
    fig.add_trace(go.Scatter(x=pd.to_datetime(source['time']), y=source["bmt9"], name="Moodule 9", mode="lines"))
    fig.add_trace(go.Scatter(x=pd.to_datetime(source['time']), y=source["bmt10"], name="Moodule 10", mode="lines"))
    fig.update_layout(
      title="Maximum Battery Temperature", xaxis_title="Date", yaxis_title="Battery Module Temperature"
    )

    st.plotly_chart(fig, use_container_width=True)