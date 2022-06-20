import React, { useEffect, useState } from "react"
import {Link} from "react-router-dom";

const ProjectList = () => {
    const [projects, setProjects] = useState([])

    const fetchData = () => {
        fetch("http://127.0.0.1:8003/api/projects")
            .then(response => {
                return response.json()
            })
            .then(data => {
                setProjects(data)
            })
    }

    useEffect(() => {
        fetchData()
    }, [])

    return (
        <div className='container mt-4 align-content-center'>
            <div className='mt-2 mb-2 w-25'>
                <a href={'projects/add'} className='btn btn-outline-primary w-100  ' >
                    Add Project
                </a>
            </div>
            <table className="table table-hover table-striped">
                <thead className='thead-dark'>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Company name</th>
                    <th scope="col">Deadline</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                {projects.length > 0 && (
                    <tbody>

                        {projects.map(project => (
                            <tr>
                                <td >{project.title}</td>
                                <td >{project.description}</td>
                                <td >{project.company_name}</td>
                                <td >{project.deadline}</td>
                                <td >
                                    <a href={'projects/' + project.id + '/show'} className="btn btn-success w-100 text-light ">Show</a>
                                    <a href={'projects/' + project.id + '/edit'} className='btn btn-warning w-100 mb-2 mt-2 text-light' >
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        ))}
                    </tbody>
                )}
            </table>

        </div>
    )
}

export default ProjectList
